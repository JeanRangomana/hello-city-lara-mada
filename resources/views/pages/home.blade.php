
@extends('layouts.app')


@section('content')

<img src="{{asset('/images/temps.png')}}" alt="temps" class="mt-12 rounded shadow-md h-32">

            <h1 class="mt-5 text-3xl ms:text-5xl font-semibold text-indigo-600">Hello from Mada</h1>
            <p class="text-lg text-gray-800">It's currently {{date('h:A')}}</p>
@endsection
