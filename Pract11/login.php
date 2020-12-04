<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            width: 400px;
        }
    </style>
</head>
<body style="padding-top: 1rem;">
<h1 align="center">Sign In</h1>
<div class="container">
    <form action="auth.php" method="post">
        Login: <input type="text" name="login"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" class="btn" value="Enter">
    </form>
    If you don't have the account, click: <a class="btn" href="registration.php">Check in</a><hr><br>
    Registered users table, click: <a class="btn" href="db.php">Users</a><hr>
</div>

</body>

</html>