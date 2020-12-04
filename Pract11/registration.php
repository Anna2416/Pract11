<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
<h1 align="center">Registration</h1>
<div class="container">
    <form action="signUp.php" method="post" enctype="multipart/form-data">
        First name: <input type="text" name="first_name"><br>
        Last name: <input type="text" name="last_name"><br>
        Login: <input type="text" name="login"><br>
        Password: <input type="password" name="password"><br>
        ID role: <input type="number" name="id_role"><br>
        Select image to upload:
        <input type="file" name="fileToUpload"><br><br>
        <input type="submit" class="btn" value="Register" name="submit">
    </form>
</div>

</body>

</html>
