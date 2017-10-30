@if (\Auth::user()->type != 'admin')
    {{ abort(403, 'Unauthorized.') }}
@endif

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
        @if(session('succes'))
            <ul class="list-group-item-success">
                <li class="list-group-item-success">{{session('succes')}}</li>
            </ul>
        @endif

        <div class="customers">
            <h3>Inactive clients</h3>
            <table class="table table-striped">
                @foreach($users as $customer)
                    @if($customer->active == 0)
                        <tr>
                            <td>{{ $customer->contact_person }}</td>
                            <td>{{ $customer->company_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->telephone_number }}</td>
                            <td>
                                <form method="post" action="{{action('adminController@activate_client', $customer->customer_id )}}">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <input name="activate" type="submit" value="set client active" class="btn btn-success">
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>