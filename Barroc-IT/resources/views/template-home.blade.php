<?php
    require ("../../public/head.php")
?>
<!doctype html>
<html lang="en">
<head>
    <title>Template Home</title>
    <link rel="stylesheet" href="../../public/css/template-home.css" />
</head>
<body>
<header class="header-sales">
    <div class="container">
        <div class="row-spaced">
            <div class="nav">
                <ul>
                    <li><a href="{{url('/sales')}}">Home</a></li>
                    <li><a href="{{url('/projects')}}">Projects</a></li>
                    <li><a href="{{url('/customers')}}">customers</a></li>
                </ul>

            </div>
            <div class="account">
                <h3>Sales</h3>
            </div>
        </div>
        <div class="row-spaced">


    <!--            --><?php
    //                if (isset($_SESSION{'sales'}))
    //                {
    //                    echo '<h3>' . $username . '</h3>';
    //                }else if (isset($_SESSION['finance']))
    //                {
    //                    echo '<h3>' . $username . '</h3>';
    //                }else if (isset($_SESSION['development']))
    //                {
    //                    echo '<h3>' . $username . '</h3>';
    //                }else if (isset($_SESSION['administration']))
    //                {
    //                    echo '<h3>' . $username . '</h3>';
    //                }
    //            ?>

        </div>
    </div>
</header>
    <div class="banner">
        <div class="container">

        </div>
    </div>
    <div class="row">
        <div class="container">

        </div>
    </div>
</body>
</html>
