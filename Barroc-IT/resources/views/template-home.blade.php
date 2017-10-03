
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

    <link rel="stylesheet" href="{{asset('css/template-home.css')}}">
    <link rel="stylesheet" href="{{asset('css/sales.css')}}">
    <!-- Styles -->
</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <ul class="row sales-ul">
            <li><a href="{{url('/template-home')}}">Home</a></li>
            <li><a href="{{url('/projects')}}">Projects</a></li>
            <li><a href="{{url('/customers')}}">customers</a></li>
        </ul>
        <div class="department1">
            <h3>Sales</h3>


            @if (isset($_SESSION{'sales'}))
                 {{'<h3>' . $username . '</h3>'}}
            @elseif (isset($_SESSION['finance']))
                 {{'<h3>' . $username . '</h3>'}}
            @elseif (isset($_SESSION['development']))
                 {{'<h3>' . $username . '</h3>'}}
            @elseif (isset($_SESSION['administration']))
                 {{'<h3>' . $username . '</h3>'}}
            @endif

        </div>
    </div>


</header>
    <div class="banner">
        <div class="container">
            <h3>Sales department</h3>
            <span>Welcome to the Sales department control panel. Here we manage all the projects send in by our costumers.</span>

                @if (isset($_SESSION{'sales'}))
                    {{'<h3>' . $salesHome1 . '</h3>'}}
                    {{ '<span>' . $salesHome2 . '</span>'}}
                @elseif (isset($_SESSION['finance']))

                     {{'<h3>' . $financeHome1 . '</h3>'}}
                     {{'<span>' . $financeHome2 . '</span>'}}
                @elseif (isset($_SESSION['development']))

                     {{'<h3>' . $developmentHome1 . '</h3>'}}
                     {{ '<span>' . $developmentHome2 . '</span>'}}
                @elseif (isset($_SESSION['administration']))

                     {{ '<h3>' . $adminHome1 . '</h3>'}}
                     {{ '<span>' . $adminHome2 . '</span>'}}
                @endif


        </div>
    </div>
    <div class="row-footer">
        <div class="container">
            <div class="row-spaced">
                <div class="item">
                    <h4>Tiny</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="item">
                    <h4>Lau</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="item">
                    <h4>Erik</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="item">
                    <h4>Jos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
