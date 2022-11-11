
@extends('app' )


 <img src="/images/temps.png" alt="temps">

@section('content')
            <h1>Hello from Mada</h1>
            <p>It's currently {{date('h:A')}}</p>
@endsection