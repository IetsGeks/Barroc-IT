<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
    <header class="header-sales">
        <div class="row-projects-nav">
            <div class="department1">
                <h3>Admin Panel</h3>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="customers">
            <h3>set clients active</h3>
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item">tiny en lau</li>
                    <li class="list-group-item">tiny en lau</li>
                    <li class="list-group-item">tiny en lau</li>
                    <li class="list-group-item">tiny en lau</li>
                    <li class="list-group-item">tiny en lau</li>
                </ul>
                {{--<div class="btn-list">--}}
                    {{--<button class="btn-primary">set</button>--}}
                    {{--<button class="btn-primary">set</button>--}}
                    {{--<button class="btn-primary">set</button>--}}
                    {{--<button class="btn-primary">set</button>--}}
                    {{--<button class="btn-primary">set</button>--}}
                {{--</div>--}}
                <div class="btn-list">
                    <form action="" class="buttons">
                        <input type="submit" value="set">
                        <input type="submit" value="set">
                        <input type="submit" value="set">
                        <input type="submit" value="set">
                        <input type="submit" value="set">
                    </form>
                </div>
            </div>
        </div>

        <div class="departments">
            <h3>Departments</h3>
            <ul >
                <li class="list-group-item"><a href="{{'/sales'}}">Sales</a></li>
                <li class="list-group-item"><a href="">Finance</a></li>
                <li class="list-group-item"><a href="">Development</a></li>
            </ul>
        </div>
    </div>
</body>
</html>