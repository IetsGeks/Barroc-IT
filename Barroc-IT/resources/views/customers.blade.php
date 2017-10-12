<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barroc-IT</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/customers.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <ul class="row ul-customers">
            <li><a href="{{url('/projects')}}">Projects</a></li>
            <li><a href="{{url('/sales')}}">sales</a></li>
        </ul>

        <div class="department1">
            <h3>sales department</h3>
        </div>
    </div>
</header>
<div class="container">
    <div class="department">
        <h3>customers</h3>
    </div>
    <div class="row">
        {{--<form action="#" class="form-control">--}}
        {{--<label for="first_name">first Name</label>--}}
        {{--<input type="text" name="first_name" id="first_name">--}}
        {{--<br>--}}
        {{--<label for="last_name">Last Name</label>--}}
        {{--<input type="text" name="last_name" id="last_name">--}}
        {{--<br>--}}
        {{--<label for="company_name">Company Name</label>--}}
        {{--<input type="text" name="company_name" id="company_name">--}}
        {{--<br>--}}
        {{--</form>--}}
        <a href="{{url('/sales/create')}}">Add new customer</a>
        <a href="{{url('/sales')}}">Search for a customer</a>

    </div>
</div>

</body>
</html>
