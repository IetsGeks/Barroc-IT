<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/add-customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/sales.css')}}">
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
    <div class="form">
        <form action="" method="post" class="form">
            {{csrf_field()}}
            <label for="c_name">Company name</label>
            <input type="text" id="c_name">
            <label for="adress">Adress</label>
            <input type="text" id="adress">
            <label for="postcode">Postcode(zip code)</label>
            <input type="text" id="postcode">
            <label for="residence">Residence</label>
            <input type="text" id="residence">
            <label for="adress2">Adress2</label>
            <input type="text" id="adress2">
            <label for="postcode2">Postcode2(zip code)</label>
            <input type="text" id="postcode2">
            <label for="residence2">Residence2</label>
            <input type="text" id="residence2">
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
            <input type="submit" value="Add customer">
        </form>
    </div>
</body>
</html>