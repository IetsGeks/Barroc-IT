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
    <div class="row-inline">
        <h2>Customer</h2>
        <button type="button" onclick="switchH()">
            <div class="helpf">
                <p>?</p>
            </div>
        </button>
    </div>
    <table class="table table-hover table-sm table-striped">
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
            <th>Activety</th>
            <th>Applications</th>
            <th>Hardware</th>
            <th>OS</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($projects))
        @foreach($projects as $project)
        <tr>
            @if($project->active == 1)
                <th class="nobold">Active</th>
            @else
                <th class="nobold">In Active</th>
            @endif
            <th class="nobold">{{ $project->applications }}</th>
            <th class="nobold">{{ $project->hardware }}</th>
            <th class="nobold">{{ $project->operating_system }}</th>
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
            <p><b>Klant Informatie</b></p>
            <p>
                hier zie je alle informatie over de geselecteerde klant. met daar bij ook alle projecten die de
                klant heeft aangevraagt bij Barroc-IT.
            </p>
        </div>
        <div class="helptxten">
            <p><b>Customer Information</b></p>
            <p>
                here you see all the informatie about the selected customer. with this you also see all the projects
                the customer has requested form Barroc-IT.
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
        window.scrollTo(0,document.body.scrollHeight);
    }

</script>
</body>
</html>
