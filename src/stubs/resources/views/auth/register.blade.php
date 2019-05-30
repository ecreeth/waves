@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white rounded shadow-lg">

                    <div class="bg-white text-gray-700 text-center font-sans py-3 px-6 mb-0 border-b-2 border-gray-100">
                        {{ __('Register') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="name" class="block text-gray-700 text-sm mb-2">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('name') ? ' border-red-500' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-gray-700 text-sm mb-2">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required>
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="align-middle text-center font-normal whitespace-no-wrap py-2 px-4 rounded text-base leading-normal text-gray-100 bg-blue-500 hover:bg-blue-700">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-2">
                                Already have an account?
                                <a class="text-blue-500 hover:text-blue-700 hover:underline no-underline" href="{{ route('login') }}">
                                    Login
                                </a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
