<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Barroc-IT</title>

    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
    <link rel="stylesheet" href="{{asset('css/add-customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
</head>
<body>
<header class="header-sales">
    <div class="row-projects-nav">
        <div>
            <ul class="row ul-customers">
                <li><a href="{{url('/projects')}}">Projects</a></li>
                <li><a href="{{url('/customers')}}">Customers</a></li>
            </ul>
        </div>

        <div class="department1">
            <h3>sales department</h3>
        </div>
    </div>
</header>
    <div class="wrapper">
        <form action="" method="post">
            <div class="left">
                <div class="form-group">
                    <input type="text" id="c_name" name="c_name" aria-describedby="cnameHelp" placeholder="Company name">
                    <small id="cnameHelp" class="form-text text-muted">Enter the name of the customers Company.</small>
                </div>
                <div class="form-group">
                    <input type="text" id="adress" name="adress" aria-describedby="adressHelp" placeholder="adress" required>
                    <small id="adressHelp" class="form-text text-muted">Enter the location of the customer. (required)</small>
                </div>
                <div class="form-group">
                    <input type="text" id="zipcode" name="zipcode" aria-describedby="zipHelp" placeholder="zipcode" required>
                    <small id="zipHelp" class="form-text text-muted">Enter the zipcode of the customer. (required)</small>
                </div>
                <div class="form-group">
                    <input type="text" id="residence" name="residence" aria-describedby="residenceHelp" placeholder="Residence" required>
                    <small id="residenceHelp" class="form-text text-muted">Enter the place of Residence. (required)</small>
                </div>
                <div class="form-group">
                    <input type="text" id="adress2" name="adress2" aria-describedby="adress2Help" placeholder="Adress 2">
                    <small id="adress2Help" class="form-text text-muted">Enter a possible 2nd adress.</small>
                </div>
                <div class="form-group">
                    <input type="text" id="zipcode2" name="zipcode2" aria-describedby="zip2Help" placeholder="Zip code 2">
                    <small id="zip2Help" class="form-text text-muted">Enter a possible 2nd zipcode.</small>
                </div>
                <div class="form-group">
                    <input type="text" id="residence2" name="residence2" aria-describedby="residence2Help" placeholder="Residence 2">
                    <small id="residence2Help" class="form-text text-muted">Enter a possible 2nd place of Residence.</small>
                </div>
            </div>
            <div class="right">
                <div class="form-group">
                    <input type="text" id="contact" name="contact" aria-describedby="contactHelp" placeholder="Contact" required>
                    <small id="contactHelp" class="form-text text-muted">Enter the full name of the customer. (required)</small>
                </div>
                <div class="form-group">
                    <input type="text" id="initials" name="initials" aria-describedby="initialsHelp" placeholder="initials">
                    <small id="initialsHelp" class="form-text text-muted">Enter the initials of the customer. </small>
                </div>
                <div class="form-group">
                    <input type="text" id="tel" name="tel" aria-describedby="telHelp" placeholder="tel" required>
                    <small id="telHelp" class="form-text text-muted">Enter the phone number of the customer. (required)</small>
                </div>
                <div class="form-group">
                    <input type="text" id="tel2" name="tel2" aria-describedby="tel2Help" placeholder="tel 2">
                    <small id="tel2Help" class="form-text text-muted">Enter a possible 2nd phone number.</small>
                </div>
                <div class="form-group">
                    <input type="text" id="fax" name="fax" aria-describedby="faxHelp" placeholder="fax">
                    <small id="faxHelp" class="form-text text-muted">Enter the fax number of the customer</small>
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
                    <small id="emailHelp" class="form-text text-muted">Enter the email of the customer. (required)</small>
                </div>
                <input type="submit" value="Add customer" class="btn-primary">
            </div>
            {{csrf_field()}}


        </form>
    </div>
</body>
</html>