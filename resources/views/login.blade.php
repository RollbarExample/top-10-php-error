<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
    <center>
        <form action="/loginme" method="post">
            USER NAME : <input type="text" name="username"><br/>
            PASSWORD  : <input type="password" name="password"><br/>
            <input type="submit" name="login" value="Login">
        </form>
    </center>
    </body>
</html>
