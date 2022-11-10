
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title',config('app.name'))</title>
</head>
<body>


      @yield('content')
    
     
 

        <footer>
        <p>
        	&copy; Copyright {{date('Y')}}

        	 @if(!Route ::is('about'))
                    &middot; <a href="{{route('about')}}">About Us</a>

             @endif
        	
        </p>
        
         </footer> 


</body>
</html>