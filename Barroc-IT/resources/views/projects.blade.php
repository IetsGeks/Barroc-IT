<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/projects.css')}}">
    <link rel="stylesheet" href="{{asset('css/sales.css')}}">
    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <div>
            <ul class="row">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/sales')}}">Sales</a></li>
                <li><a href="{{url('/customers')}}">customers</a></li>
            </ul>
        </div>

        <div class="department1">
            <h3>sales department</h3>
        </div>

    </div>
</header>
<div class="container container-sales">
    <h3>projects</h3>
    <div class="row-projects">
        <div>
            <h4>ordernumber</h4>
            <ol>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
        </div>

        <div>
            <h4>name customer</h4>
            <ul>
                <li>jacobs</li>
                <li>smits</li>
                <li>jansen</li>
                <li>tiny</li>
                <li>lau</li>
            </ul>
        </div>

        <div>
            <h4>project price</h4>
            <ul>
                <li>€1200,-</li>
                <li>€900,-</li>
                <li>€450,-</li>
                <li>€680,-</li>
                <li>€740,-</li>
            </ul>
        </div>

        <div>
            <h4>project name</h4>
            <ul>
                <li>pc4u</li>
                <li>barroc-it</li>
                <li>deze drie</li>
                <li>fifa</li>
                <li>de gokker</li>
            </ul>
        </div>

        <div>
            <h4>change</h4>
            <ul>
                <li><a href="">change</a></li>
                <li><a href="">change</a></li>
                <li><a href="">change</a></li>
                <li><a href="">change</a></li>
                <li><a href="">change</a></li>
            </ul>
        </div>

    </div>
</div>

<footer>
    <p>groep3&copy;</p>
</footer>
</body>
</html>

