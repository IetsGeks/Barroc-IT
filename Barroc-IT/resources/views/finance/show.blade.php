<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc-it</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>{{$customer->company_name}}</h2>
        <table class="table table-striped">
            <tr>

                @if($user->balance > $user->limit)
                    <th class="alert-danger">Balance</th>
                    <td class="alert-danger">{{$user->balance}}</td>
                @else
                    <th class="alert-success">Balance</th>
                    <td class="alert-success">{{$user->balance}}</td>
                @endif
            </tr>
            <tr>

                @if($user->balance > $user->limit)
                    <th class="alert-danger">limit</th>
                    <td class="alert-danger">{{$user->limit}}</td>
                @else
                    <th class="alert-success">limit</th>
                    <td class="alert-success">{{$user->limit}}</td>
                @endif
            </tr>
            <tr>
                <th>Sales amount</th>
                <td>{{$user->sales_amount}}</td>
            </tr>
        </table>

        <h2>Active projects</h2>
        @if($project->customer_number == $customer->ID)
            <table>
                <tr>
                    <th>project number</th>
                    <td>{{$project->project_id}}</td>

                    <th>aaplications</th>
                    <td>{{$project->applications}}</td>

                    <th>hardware</th>
                    <td>{{$project->hardware}}</td>

                    <th>operating system</th>
                    <td>{{$project->operating_system}}</td>
                </tr>
            </table>
        @else

        @endif
    </div>
</body>
</html>