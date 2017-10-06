<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/add-customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/searchC.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
        <form action="" method="post" class="form">
            {{csrf_field()}}
            <input type="text" id="c_name" name="c_name" placeholder="Company name">
            <label for="adress">*</label>
            <input type="text" id="adress" name="adress" placeholder="adress" required>
            <label for="zipcode">*</label>
            <input type="text" id="zipcode" name="zipcode" placeholder="zipcode" required>
            <label for="residence">*</label>
            <input type="text" id="residence" name="residence" placeholder="Residence" required>
            <input type="text" id="adress2" name="adress2" placeholder="Adress 2">
            <input type="text" id="zipcode2" name="zipcode2" placeholder="Zip code 2">
            <input type="text" id="residence2" name="residence2" placeholder="Residence 2">
            <label for="contact-person">Contact Person</label>
            <input type="text" id="contact-person">
            <label for="intitials">initials</label>
            <input type="text" id="intitials">
            <label for="t-nmr">Telephone number</label>
            <input type="text" id="t-nmr2">
            <label for="t-nmr2">telephone number2</label>
            <input type="text" id="t-nmr2">
            <label for="f-nmr">Fax-number</label>
            <input type="text" id="f-nmr">
            <label for="e-mail">E-mail</label>
            <input type="text" id="e-mail">
            <input type="submit" value="Add customer" class="btn-primary">
        </form>
    </div>
</body>
</html>