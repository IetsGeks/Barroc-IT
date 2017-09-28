<?php
require ('../app/database.php');
require ('head.php');
?>

<div class="jumbotron jumbo-login">
    <div class="container">
        <h1 class="text_1 text-center">BARROC IT. </h1>
        <form action="" class="form-login col-md-4 col-md-offset-4">
            <legend class="subhead">Please Log in</legend>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="submit" class="btn btn-primary">
                <button type="button" onclick="switchH()">
                    <div class="helpf">
                        <p>?</p>
                    </div>
                </button>
            </div>
        </form>
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
</div>




<?php
require ('foot.php');
?>

<script>

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