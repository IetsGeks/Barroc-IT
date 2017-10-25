<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <link rel="stylesheet" href="{{asset('css/helpF.css')}}">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="jumbotron jumbo-login">
            <div class="container">
                <h1 class="text_1 text-center">BARROC IT.</h1>
                @guest

                <form method="POST" action="{{ route('login') }}" class="form-login col-md-4 col-md-offset-4">
                    {{ csrf_field() }}
                    <legend class="subhead">Please Log in</legend>
                    <div class="form-group {{ $errors->has('user') ? ' has-error' : '' }}">
                        <label for="user">Username</label>
                        <input type="text" name="user" id="user" class="form-control" value="{{ old('user') }}" required autofocus>
                        @if ($errors->has('user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
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
                @else
                    @endguest

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
