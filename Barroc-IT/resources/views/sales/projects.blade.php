@if (\Auth::user()->type != 'sales' && \Auth::user()->type != 'development')
{{ abort(403, 'Unauthorized.') }}
@endif

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
    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Styles -->
</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <ul class="nav-items-projects">
            <li><a href="{{url('/sales-home')}}">Home</a></li>
            <li><a href="{{url('/sales/projects')}}">Projects</a></li>
        </ul>
        <div class="department1">
            <h3>sales department</h3>
        </div>

    </div>
</header>
<div class="wrapper">
    <div class="container-sales">
        <h3>Open projects</h3>
        <div class="add">
            <a href="#" id="add-p">Add project</a>
        </div>
        <div class="row-projects">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer name</th>
                        <th>Company name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>i</td>
                        <td>customer</td>
                        <td>company</td>
                        <td>email</td>
                        <td>phone</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-sales">
        <h3>Closed projects</h3>
        <div class="row-projects">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer name</th>
                        <th>Company name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>i</td>
                        <td>customer</td>
                        <td>company</td>
                        <td>email</td>
                        <td>phone</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

