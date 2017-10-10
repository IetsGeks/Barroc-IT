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
    <div class="sub">
        <button type="button" onclick="switchH()">
            <div class="helpf">
                <p>?</p>
            </div>
        </button>
        <a href="#">Set Inactive</a>
    </div>

    <table class="table table-hover table-sm table-striped">
        <thead>
        <h2>Customer</h2>
        </thead>
        <tbody>
        <tr>
            <th>Company</th>
            <th class="nobold">{{ $customer->company_name }}</th>
        </tr>
        <tr>
            <th>Adress</th>
            <th class="nobold">{{ $customer->adress1 }}</th>
        </tr>
        <tr>
            <th>Adress 2</th>
            <th class="nobold">{{ $customer->adress2 }}</th>
        </tr>
        <tr>
            <th>Zipcode</th>
            <th class="nobold">{{ $customer->postal_code1 }}</th>
        </tr>
        <tr>
            <th>Zipcode 2</th>
            <th class="nobold">{{ $customer->postal_code2 }}</th>
        </tr>
        <tr>
            <th>Location</th>
            <th class="nobold">{{ $customer->place_of_residence1 }}</th>
        </tr>
        <tr>
            <th>Location 2</th>
            <th class="nobold">{{ $customer->place_of_residence2 }}</th>
        </tr>
        <tr>
            <th>Contact</th>
            <th class="nobold">{{ $customer->contact_person }}</th>
        </tr>
        <tr>
            <th>initials</th>
            <th class="nobold">{{ $customer->initials }}</th>
        </tr>
        <tr>
            <th>Tel</th>
            <th class="nobold">{{ $customer->telephone_number }}</th>
        </tr>
        <tr>
            <th>Fax</th>
            <th class="nobold">{{ $customer->fax_number }}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th class="nobold">{{ $customer->email }}</th>
        </tr>
        </tbody>
        </table>

        <table class="table table-hover table-sm">
        <thead>
        <h2>Projects</h2>
        <tr>
            <th>Active</th>
            <th>Applications</th>
            <th>Hardware</th>
            <th>OS</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($projects))
        @foreach($projects as $project)
        <tr>
            <th>{{ $project->active }}</th>
            <th>{{ $project->applications }}</th>
            <th>{{ $project->Hardware }}</th>
            <th>{{ $project->OS }}</th>
        </tr>
        @endforeach
        @else
        <tr>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
        </tr>
        @endif
        </tbody>
    </table>
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
