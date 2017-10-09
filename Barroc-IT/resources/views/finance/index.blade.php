<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc-it</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/sales.css')}}">
    <link rel="stylesheet" href="{{asset('css/finance.css')}}">
</head>
<body>
<header class="header-sales">
    <ul class="row ul-customers">
        <li><a href="{{url('/projects')}}">Projects</a></li>
        <li><a href="{{url('/customers')}}">Customers</a></li>
    </ul>
    <div class="department">
        <h3>finance department</h3>
    </div>
</header>

<div class="container">

    <h3>finance department</h3>
    <ul class="list-group row">
        <li>id</li>
        <li>balance</li>
        <li>limit</li>
    </ul>
    @foreach($users as $user)
        <div>
            @if($user->balance > $user->limit)
                <div class="outcome-danger outcome">
                    <p class="danger">{{$user->id}}</p>
                    <p class="danger">{{$user->balance}}</p>
                    <p class="danger">{{$user->limit}}</p>
                </div>

            @else

                <div class="outcome-succes outcome">
                    <p class="succes">{{$user->id}}</p>
                    <p class="succes">{{$user->balance}}</p>
                    <p class="succes">{{$user->limit}}</p>
                </div>

            @endif
        </div>

    @endforeach
</div>
</body>
</html>