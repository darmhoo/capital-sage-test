@extends('welcome')

@section('content')



    <div class="container mx-auto">
        <div class="max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm">
            <div class="flex justify-center">
                <h2 class="mx-10">Welcome, <b>{{ auth()->user()->name }}</b></h2>
                <div class="text-blue-700 place-self-end"><a href="{{ url('/logout') }}"> logout </a></div>
            </div>
            <div>Verify Your NIN</div>
            <div>
                <form method="POST" action="/">
                    {{ csrf_field() }}


                    <div class="mb-6">
                        <input type="text" placeholder="Enter Your NIN"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                            id="nin" name="bvn">
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md  focus:bg-indigo-600 focus:outline-none">Verify</button>
                    </div>
                    @if ($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif
                </form>

                @isset($result)
                    @if ($result['success'] == true)
                        <div class="bg-green-200 text-lime-950 p-3 rounded-md">
                            <div>Name: {{ $result['data']['firstName'] }} {{ $result['data']['lastName'] }}</div>
                            <div>Phone: {{ $result['data']['mobile'] }} </div>
                            <div>Date of Birth: {{ $result['data']['dateOfBirth'] }} </div>
                        </div>
                    @else
                        <div class="bg-red-200 text-red-950 p-3 rounded-md">{{ $result['message'] }}</div>
                    @endif
                @endisset

            </div>
        </div>
    </div>
@endsection
