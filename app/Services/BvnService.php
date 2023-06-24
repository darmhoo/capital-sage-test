<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BvnService
{
    public function verifyBvn($bvn)
    {
        $response = Http::withHeaders([
            'token' => env('API_KEY')
        ])->post(env('YOUVERIFY_TEST_ENDPOINT') . '/v2/api/identity/ng/bvn', [
                    'id' => (string) $bvn,
                    'isSubjectConsent' => true
                ]);

        return $response;
    }

   
}
