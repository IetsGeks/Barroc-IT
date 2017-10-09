
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/sales.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles -->


</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <ul class="row sales-ul">
            <li><a href="{{url('/projects')}}">Projects</a></li>
            <li><a href="{{url('/customers')}}">customers</a></li>
        </ul>

        <div class="department1">
            <h3>sales department</h3>
        </div>
    </div>
</header>
<div class="container">
    <div class="department">
        <h3>sales department</h3>
    </div>

    <div class="content">
        <h4>you are now in the sales department section</h4>
        <p>choose between projects, to add a new project or view a project status</p>
        <p>or choose for customers to search customers, add a new customer or set an customer inactive</p>
    </div>
</div>

</body>
</html>
