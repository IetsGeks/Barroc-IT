<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
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
        <form action="{{url('/search-customer')}}" method="post" class="form">
            {{csrf_field()}}
            <input class="searchB form-control" type="text" id="searchC" name="searchC">
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
            <tbody>
            <tr class="table-success">
                <th scope="row">1</th>
                <td>Contact</td>
                <td>Company</td>
                <td>Tel</td>
                <td>Email</td>
                <td>Address</td>
            </tr>
            <tr class="table-success">
                <th scope="row">2</th>
                <td>Contact</td>
                <td>Company</td>
                <td>Tel</td>
                <td>Email</td>
                <td>Address</td>
            </tr>
            <tr class="table-danger">
                <th scope="row">3</th>
                <td>Contact</td>
                <td>Company</td>
                <td>Tel</td>
                <td>Email</td>
                <td>Address</td>
            </tr>
            </tbody>
        </table>
        <div class="error" id="hiddenER">
            <div><p>Oops!</p><p>Have you tryed to turn it off and on again?</p></div>
        </div>
        <div class="helptxt" id="hidden">
            <div class="helptxtnl">
                <p><b>Inloggen</b></p>
                <p>
                    Wanneer je de website opzoekt vindt je het log-in scherm.
                    Hier vul je de inlog gegevens van jouw afdeling in die je
                    Zou moeten hebben gehad van het bedrijf. Als je dit niet
                    hebt gehad neem dan contact op met je afdelings-manager.
                </p>
            </div>
            <div class="helptxten">
                <p><b>Log-in</b></p>
                <p>
                    When you search for the website you will find a log-in screen.
                    You need to put the log-in data of your department in the
                    input fields. If you don't have that, please contact your
                    departement-manager.
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

