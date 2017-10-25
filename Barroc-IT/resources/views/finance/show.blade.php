<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc-it</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/sales.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/show-finance.css')}}">
</head>
<body>

    <div class="container">


        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>

            @foreach($customers as $customer)
                    @if($user->project_id == $project->project_id )
                        @if($project->customer_id == $customer->customer_id)
                            <h2>Company: {{$customer->company_name}}</h2>
                        @endif
                    @endif
            @endforeach

        <table class="table table-striped">
            @foreach($customers as $customer)
                @if($user->project_id == $project->project_id )
                    @if($project->customer_id == $customer->customer_id)
                        <tr>
                            <th>Adress</th>
                            <td>{{$customer->adress1}}</td>
                        </tr>

                        <tr>
                            <th>Post code</th>
                            <td>{{$customer->postal_code1}}</td>
                        </tr>

                        <tr>
                            <th>City</th>
                            <td>{{$customer->place_of_residence1}}</td>
                        </tr>

                        <tr>
                            <th>Contact person</th>
                            <td>{{$customer->contact_person}}</td>
                        </tr>

                        <tr>
                            <th>telephone number</th>
                            <td>{{$customer->telephone_number}}</td>
                        </tr>

                        <tr>
                            <th>E-mail</th>
                            <td>{{$customer->email}}</td>
                        </tr>
                    @endif
                @endif
            @endforeach

            <tr>

                @if($user->balance > $user->limit)
                    <th class="danger">Balance</th>
                    <td class="danger">{{$user->balance}}</td>
                @else
                    <th class="success">Balance</th>
                    <td class="success">{{$user->balance}}</td>
                @endif
            </tr>
            <tr>

                @if($user->balance > $user->limit)
                    <th class="danger">limit</th>
                    <td class="danger">{{$user->limit}}</td>
                @else
                    <th class="success">limit</th>
                    <td class="success">{{$user->limit}}</td>

                @endif

            </tr>



            <tr>
                <th>Sales amount</th>
                <td>{{$user->sales_amount}}</td>
            </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <form action="{{action('financeController@update', $project->project_id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <label for="">Enter limit:</label>
                                <input type="hidden" value="{{$project->project_id}}" name="project_id">
                                <input class="form-control" type="text" class="list-group" name="limit">
                                <input type="submit" class="btn-danger btn" value="Set limit">
                            </form>
                        </div>
                    </td>
                </tr>
        </table>



            <form action="{{action('financeController@inactivate_client', $project->customer_id) }}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" class="btn-danger btn" value="Set client inactive">
            </form>


        <h2>Active projects</h2>
        @if($project->customer_number == $customer->ID)
            <table class="table table-striped">
                <tr>
                    <th>project number</th>
                    <td>{{$project->project_id}}</td>
                </tr>
                <tr>
                    <th>aaplications</th>
                    <td>{{$project->applications}}</td>
                </tr>

                <tr>
                    <th>hardware</th>
                    <td>{{$project->hardware}}</td>
                </tr>

                <tr>
                    <th>operating system</th>
                    <td>{{$project->operating_system}}</td>

                </tr>

            </table>
        @endif
                <form action="{{action('financeController@finish', $project->project_id) }}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <input type="submit" class="btn-danger btn" value="Set project inactive">
                </form>
        <h2>invoices</h2>

        <table class="table table-striped">

                @foreach($invoices as $invoice)
                    @if($project->project_id == $invoice->project_id)
                        <tr>
                            <th>Invoice amount</th>
                            <td>€{{$invoice->amount}},-</td>
                        </tr>
                        <tr>
                            <th>Invoice description</th>
                            <td>{{$invoice->description}}</td>
                        </tr>
                    @endif
                @endforeach
        </table>

            <h2>Add invoice</h2>

            <form action="{{action('invoiceController@add_invoice', $project->project_id)}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="project_id" value="{{$project->project_id}}">
                <input type="hidden" name="customer_id" value="{{$customer->customer_id}}">

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <input class="btn btn-success" type="submit" value="Add invoice">
            </form>
    </div>
</body>
</html>