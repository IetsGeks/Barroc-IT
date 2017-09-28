<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../public/css/app.css">
    <!-- Styles -->
    <style>
        *{
            font-family: 'Arial';
        }
        body{
            margin: 0;
        }
        .nav-bar ul li a{
            color: #5e5848;
            font-size: 20px;

        }
        .nav-bar ul li{
            display: inline-block;
            padding: 5px;
        }
        .header-sales{
            background-color: #808080;
            height: 100px;
        }
        .form-underneath{
            display: flex;
            flex-direction: column-reverse;
        }
        h3{
            text-align: center;
            font-size: 2em;
            text-transform: uppercase;
            margin-top:5%;
        }
        h4{
            text-transform: uppercase;
            color: #CFC1B5;
        }
        .container-sales{
            margin-top: 2%;
        }
        .department{
            margin-top: 1%;
        }
        .department h3{
            color: white;
            text-transform: uppercase;
            font-weight: bold;
        }
        .row-projects-nav ul{
            margin-top: 10%;
        }
        ul{
            list-style-type: none;
            padding: 0;
        }
        ol{
            padding-left: 14px;
        }
        .row li{
            list-style-type: none;
            border-radius: 2px;
            border: 2px solid #808080;
            padding: 1%;
            margin: 0 20px;
        }
        .row{
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            justify-content: space-between;
            margin-top: 0px;
        }
        .row li a{
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
        }
        .row input{
            height: 40px;
            margin-top: 2%;
        }
        .row-projects{
            display: flex;
            justify-content: space-around;
        }
        footer{
            background-color: #808080;
            height: 60px;
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            text-align: center;
        }
        .row-projects-nav{
            display: flex;
            justify-content: space-around;
        }
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

        <div class="department">
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


</body>
</html>

