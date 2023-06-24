@extends('welcome')

@section('content')
    <div class="container mx-auto">
        <div class="max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700">Login</h1>
            </div>
            <div>
                <form method="POST" action="/login">
                    {{ csrf_field() }}


                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Email:</label>
                        <input type="email"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                            id="email" name="email">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm text-gray-600">Password:</label>
                        <input type="password"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                            id="password" name="password">
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md  focus:bg-indigo-600 focus:outline-none">Submit</button>
                    </div>
                    @if ($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif
                </form>
                <small>
                    <a href="{{ url('/register') }}" class="text-center block  mb-2 text-sm text-blue-600"> Don't have an account? Create one </a>
                </small>
            </div>
        </div>
    </div>
@endsection
