
@extends('app')


@section('title','about | '.config('app.name'))



@section('content')
        <img src="/images/avatar.png" alt="avatar" >

        <p>Build with &hearts; by les teachers du net </p>

       

        <p> <a href="{{route('home')}}">Revenir à la page d'accueil</a></p>

        
@endsection