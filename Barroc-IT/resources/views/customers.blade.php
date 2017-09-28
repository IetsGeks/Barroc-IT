<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

        h3{
            text-align: center;
            font-size: 2em;
            text-transform: uppercase;
        }
        h4{
            text-transform: uppercase;
            color: #CFC1B5;
        }

        .department h3{
            color: black;
            text-transform: uppercase;
            font-weight: bold;
        }
        .row ul{
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
            display: flex;
            justify-content: space-around;
            margin-top: 0;
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
    </style>

</head>
<body>
<header class="header-sales">
    <ul class="row">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/projects')}}">Projects</a></li>
        <li><a href="{{url('/sales')}}">sales</a></li>
    </ul>
</header>
<div class="department">
    <h3>customers</h3>
</div>
    <div class="row">
        <form action="#" class="form-control">
            <label for="first_name">first Name</label>
            <input type="text" name="first_name" id="first_name">
            <br>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name">
            <br>
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name">
            <br>
        </form>
    </div>

</body>
</html>
