
<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

	<title> {{isset($title) ? $title .'|'. config('app.name') : config('app.name') }} </title>
</head>
<body class="py-8 flex flex-col justify-between items-center min-h-screen">


   <main role="main" class="flex flex-col justify-center  items-center">
         @yield('content')
   </main>
    
  @include('layouts/partials/_footer')

</body>
</html>