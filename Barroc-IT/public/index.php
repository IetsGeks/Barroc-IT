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
                
            </div>
        </form>
        <button onclick="switchH()" onload="onOff()">
                    <div class="helpf">
                        <p id="temp">?</p>
                    </div>
                </button>
        <div class="help" id="help">
            <p>test</p>
        </div>
    </div>
</div>




<?php
require ('foot.php');
?>

<script>
function onOff{
    $onOff = false;
}

function switchH{
    if ($onOff == true) {
        $onOff = false;
        helpMeOff();
    }
    else{
        $onOff = true;
        helpMeOn();
    }
    document.getElementById("temp").innerHTML = "test";
}

function helpMeOn(){
    document.getElementById('help').style.visibility="visible";
}

function helpMeOff(){
    document.getElementById('help').style.visibility="hidden";
}

</script>