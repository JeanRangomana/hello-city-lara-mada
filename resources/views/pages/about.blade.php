
@extends('app')


@section('title','about | '.config('app.name'))



@section('content')

        <p>Build with &hearts; by les teachers du net </p>

        @if(Route ::is('about'))
             <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
        @endif

       

        
@endsection