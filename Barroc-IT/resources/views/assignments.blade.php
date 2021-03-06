@if (\Auth::user()->type != 'development')
{{ abort(403, 'Unauthorized.') }}
@endif

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc-it - assignments</title>
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
    <link rel="stylesheet" href="{{asset('css/development.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<header class="header-development">
    <div class="container">
        <div class="row-between">
            <div class="header-nav-assignments row">
                <ul class="nav-assignments-items">
                    <li><a href="{{url('/development-home')}}">Home</a></li>
                    <li><a href="{{url('/assignments')}}">Assignments</a></li>
                </ul>
            </div>
            <div class="departments">
                <h3>Development</h3>
            </div>
        </div>
    </div>
</header>
<div class="banner">
    <div class="wrapper">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>C.NAME</th>
                    <th>APPLICATIONS</th>
                    <th>HARDWARE</th>
                    <th>FINISHED</th>
                </tr>
                @foreach($projects as $project)
                    <tr>
                        <td>{{strpos($customers, $project->project_id)}}</td> {{-- this does not work yet --}}
                        <td>{{$project->applications}}</td>
                        <td>{{$project->hardware}}</td>
                        <td @if($project->active == 0) class="list-group-item-danger" @else class="list-group-item-success" @endif>{{$project->active}}</td>
                    </tr>
                @endforeach
                </thead>
            </table>
        </div>

    </div>
</div>

</body>
</html>
