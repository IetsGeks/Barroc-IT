
{{--{{$salesHome1 = 'Sales department'}}--}}
{{--{{$salesHome2 = 'Welcome to the Sales department control panel. Here we manage all the projects send in by our costumers.'}}--}}
{{--{{$financeHome1 = 'Finance department'}}--}}
{{--{{$financeHome2 = 'Welcome to the Finance department control panel. Here we manage all the expenses of the costumers and our company'}}--}}
{{--{{$adminHome1 = 'Admin panel'}}--}}
{{--{{$adminHome2 = 'Welcome to the admin panel. Here we control the costumers who passed their credit limit.'}}--}}
{{--{{$developmentHome1 = 'Development department'}}--}}
{{--{{$developmentHome2 = 'Welcome to the Development department. Here we can see all the projects wich can be worked on and wich cant be worked on'}}--}}

<!doctype html>
<html lang="en">
<head>
    <title>Template Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
    <link rel="stylesheet" href="{{asset('css/template-home.css')}}">

    <!-- Styles -->
</head>
<body>
<header class="header-sales">
    <div class="container">
    {{--<div class="row-projects-nav">--}}
        <div class="row-between">
            @yield('header-content')
            
        </div>
    </div>
</header>
    <div class="banner">
        <div class="container">
            @yield('banner-content')
        </div>
    </div>
    <div class="row-footer">
        <div class="footer-wrapper">
            @yield('footer-content')
        </div>
    </div>
</body>
</html>
