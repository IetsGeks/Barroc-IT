<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barroc-IT</title>
    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
    <link rel="stylesheet" href="{{asset('css/helpF.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>


<body>
    <header class="header-sales">
        <ul class="row ul-customers">
            <li><a href="{{url('/projects')}}">Projects</a></li>
            <li><a href="{{url('/customers')}}">Customers</a></li>
        </ul>
    </header>
    <div class="wrapper">
        <form action="" method="get" class="form">
            <input class="searchB form-control" type="text" id="searchC" name="searchC" placeholder="Search">
            <input class="searchS btn btn-primary" type="submit" value="Search">
            <button type="button" onclick="switchH()">
                <div class="helpf">
                    <p>?</p>
                </div>
            </button>
        </form>
        <table class="table table-hover table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Contact</th>
                <th>Company</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            </thead>
            @if(isset($customers) && isset($_GET['searchC']) && $_GET['searchC'] != null)
                <tbody>
                @foreach($customers as $customer)
                    @if(strpos($customer->contact_person, $_GET['searchC']) !== false ||
                        strpos($customer->company_name, $_GET['searchC']) !== false ||
                        strpos($customer->telephone_number, $_GET['searchC']) !== false ||
                        strpos($customer->email, $_GET['searchC']) !== false ||
                        strpos($customer->postal_code1, $_GET['searchC']) !== false)
                        @if($customer->debit > $customer->limit)
                            <tr class="table-danger">
                        @else
                            <tr class="table-success">
                        @endif
                        <th scope="row">{{ $customer->ID }}</th>
                        <td>{{ $customer->contact_person }}</td>
                        @if($customer->company_name == null)
                            <td>-</td>
                        @else
                            <td>{{ $customer->company_name }}</td>
                        @endif
                        <td>{{ $customer->telephone_number }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->postal_code1 }}</td>
                        <td><a href="{{url("/customerSearch/$customer->customer_id")}}">View</a></td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        @else
        </table>
        <div class="error">
            <div><p>Well!</p><p>i don't see anyone here.</p></div>
        </div>
        @endif
        <div class="helptxt" id="hidden">
            <div class="helptxtnl">
                <p><b>klant zoeken</b></p>
                <p>
                    hier kan je met de zoek balk een klant op zoeken die je nodig hebt.
                    als je zoekt zoek je op de punten die bovenaan gegeven staan. (id, contact, bedrijf, ect.)
                    als je je klant hebt gevonden zal de klant een groen of roode agtergrong hebben.
                    dit betekend of hij boven of onder het krediet staat.
                    vervolgens kan je op de klant klicken om er meer informaatie over te krijgen.
                </p>
            </div>
            <div class="helptxten">
                <p><b>Customer Search</b></p>
                <p>
                    Here you can find a customer with the search bar provided. when you are searching,
                    you will be searching on the information given above. (id, contact, company, ect.)
                    when you have found your customer, the customer will have a red or green background.
                    This means that he/she is above or below his/her credit.
                    you can click on the customer to get more information.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        function switchH(){
            if (document.getElementsByClassName("helptxt")[0].id == "hidden") {
                HtS();
            }else{
                StH();
            }
        }

        function StH(){
            $('div#shown').attr("id", "hidden");
        }

        function HtS(){
            $('div#hidden').attr("id", "shown");
        }

    </script>
</body>
</html>

