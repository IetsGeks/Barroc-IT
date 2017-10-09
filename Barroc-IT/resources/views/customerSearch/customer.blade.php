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
    <div class="department1">
        <h3>sales department</h3>
    </div>
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

    <table class="table table-hover table-sm">
        <thead>
        <h2>Customer</h2>
        <tr>
            <th>#</th>
            <th>Company</th>
            <th>Adress</th>
            <th>Zipcode</th>
            <th>Location</th>
            <th>Contact</th>
            <th>initiuals</th>
            <th>Tel</th>
            <th>Fax</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr id="hidden">
            <th scope="row"></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        <tr id="show">
            <th scope="row">-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
        </tr>
        </tbody>
        </table>

        <table class="table table-hover table-sm">
        <thead>
        <h2>projects</h2>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Active</th>
            <th>Payed</th>
            <th>Applications</th>
            <th>Hardware</th>
            <th>OS</th>
        </tr>
        </thead>
        <tbody>
        <tr id="hidden">
            <th scope="row"></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        <tr id="show">
            <th scope="row">-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
            <th>-</th>
        </tr>
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
