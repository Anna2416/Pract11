<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            width: 550px;
        }
    </style>
</head>
<body style="padding-top: 1rem;">
<h1 align="center">Personal Account</h1>
<div class="container">
    <?php
    if ($_SESSION['auth'] == true) {
        echo '<img src="welcome.png" alt="Welcome!" width="633" height="260"><br>';
        echo "<h4 align='center'>You are authorised user.</h4>";
        echo '<br><h6">'."Back to Sign In: ". '<a class="btn" href="login.php">Sign In</a><hr>'.'<h6>';
    } else {
        echo "Incorrect username or password.<br>";
        echo "Try again: ".'<a class="btn" href="login.php">Login</a><br>';
        echo "<br>To create an account, click: ".'<a class="btn" href="registration.php">Check in</a><hr>';
    }
    ?>
</div>
</body>
</html>

