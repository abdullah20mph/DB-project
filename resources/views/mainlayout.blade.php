


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>

    @include('partials.styles')

</head>
<body id="body-pd">
    
    @include('partials.header')




   
    
    
    <!--Container Main start-->
    <div class="main-content">
        @yield('main-content-section')
    </div>

    @include('partials.footer')

    
    </body>


    <!--Container Main end-->
</html>