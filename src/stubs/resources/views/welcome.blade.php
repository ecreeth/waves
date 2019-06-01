@extends('layouts.master')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white rounded shadow-lg">

				<div class="font-semibold bg-white text-gray-700 py-3 px-6 mb-0">
					Welcome to your awesome project!
				</div>

				<div id="example"></div>
            </div>
        </div>
    </div>
@endsection
