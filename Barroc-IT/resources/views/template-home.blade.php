<?php
//    require ("../../public/head.php")
?>
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
        </div>
    </div>


</header>


<div class="check-account">
    <?php
        if (isset($_SESSION{'sales'}))
        {
            echo '<h3>' . $username . '</h3>';
        }else if (isset($_SESSION['finance']))
        {
            echo '<h3>' . $username . '</h3>';
        }else if (isset($_SESSION['development']))
        {
            echo '<h3>' . $username . '</h3>';
        }else if (isset($_SESSION['administration']))
        {
            echo '<h3>' . $username . '</h3>';
        }
    ?>
</div>

    <div class="banner">
        <div class="container">
            <h3>Sales department</h3>

                <p>Welcome to the Sales department control panel. Here we manage all the projects send in by our costumers.</p>

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
