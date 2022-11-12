
@extends('layouts.app')


@section('title','about | '.config('app.name'))



@section('content')
        <img src="{{asset('/images/avatar.png')}}" alt="avatar" class="my-12 rounded-full shadow-md h-32">

        <h2 class=" mb-5 text-gray-700"> 
                Build with <span class="text-pink-500"> &hearts;</span> by LE BILAL 
        </h2>

       

        <p> 
                <a href="{{route('home')}}"  class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
        </p>
        
@endsection