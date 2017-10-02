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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <div>
            <ul class="row">
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
    <h3>Open projects</h3>

    <div class="add">
        <a href="#" id="add-p">Add project</a>
    </div>

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

<div class="container container-sales">
    <h3>In dev projects</h3>
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
            <ul class="text-succes">
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

<div class="container container-sales">
    <h3>Closed projects</h3>
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

