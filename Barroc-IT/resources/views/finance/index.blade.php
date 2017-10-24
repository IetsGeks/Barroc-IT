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
    <div class="row-projects-nav">

        <div class="department1">
            <h3>finance department</h3>
        </div>
    </div>
</header>

<div class="container">

    <h3>Active projects</h3>
    <ul class="list-group-item-success">
        @if(session('succes'))
            <li class="list-group-item-success">{{session('succes')}}</li>
        @endif
    </ul>
    <ul class="list-group row">
        <li>Company Name</li>
        <li>project_id</li>
        <li>view</li>

    </ul>

    @foreach($projects as $project)
        @foreach($customers as $customer)
            @foreach($finances as $finance)
                @if($finance->project_id == $project->project_id )
                        @if($project->customer_id == $customer->customer_id && $customer->active == 1)

                                    <div>
                                        @if($finance->balance > $finance->limit)
                                            <div class="outcome-danger outcome">
                                                @if($project->active == 1)
                                                    <p class="danger">{{$customer->	company_name}}</p>
                                                    <p class="danger">{{$finance->project_id}}</p>
                                                    <a href="{{action('financeController@show', $finance->project_id)}}">view</a>
                                                @endif
                                            </div>

                                        @else

                                            <div class="outcome-succes outcome">
                                                @if( $project->active == 1)
                                                    <p class="succes">{{$customer->company_name}}</p>
                                                    <p class="succes">{{$project->project_id}}</p>
                                                    <a href="{{action('financeController@show', $finance->project_id)}}">view</a>

                                                @endif
                                            </div>

                                        @endif
                                    </div>

                        @endif

                @endif
            @endforeach
        @endforeach
    @endforeach

    <div class="invoices-section">
        <h3>Open invoices</h3>

        <table class="table table-striped">

            @foreach($invoices->sortBy('customer_id') as $invoice)

                    @if($customer->active == 1 && $invoice->paid == 0)
                        <tr>
                            @foreach($customers as $customer)
                                @if($invoice->customer_id == $customer->customer_id)
                                    <th>Company name:</th>
                                    <td>{{$customer->company_name}}</td>
                                @endif
                            @endforeach
                            <th>Project id:</th>
                            <td>{{$invoice->project_id}}</td>

                            <th>Invoice amount:</th>
                            <td>€{{$invoice->amount}},-</td>

                            <th>Description:</th>
                            <td>{{$invoice->description}}</td>

                            <td>
                                <form method="post" action="{{action('financeController@set_paid', $invoice->id )}}">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <input name="activate" type="submit" value="paid" class="btn btn-success">
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