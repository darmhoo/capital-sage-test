<?php

namespace App\Http\Controllers;

use App\Services\BvnService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VerifyBvn extends Controller
{
    //
    private $bvnService;

    public function __construct(BvnService $bvnService)
    {
        $this->bvnService = $bvnService;
    }
    function verify_bvn(Request $request)
    {
        $bvn = $request->validate(
            ['bvn' => 'required|integer|digits:11']
        )['bvn'];

        $response = $this->bvnService->verifyBvn($bvn);
        return response()->view('dashboard', ['result' => $response->json()]);
    }

    public function verifyBvnApi(Request $request){
        $bvn = $request->validate(
            ['bvn' => 'required|integer|digits:11']
        )['bvn'];

        $response = $this->bvnService->verifyBvn($bvn);
        return response()->json(["status" => 200, "data" => $response]);
    }
}