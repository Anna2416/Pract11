<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд
$_SESSION['auth'] = false;

$conn = new mysqli($servername, $username, $password, $database);

$login = $_POST['login'];
$password = $_POST['password'];

$user = mysqli_query($conn, "select * from users where login='" . $login . "' and password='" . $password . "';");
$check_user = mysqli_fetch_array($user);

if (is_array($check_user)) {
    $_SESSION['auth'] = true;
    header('Location: registration.php');
} else {
    echo "<h4 align='center' style='padding-top: 1rem'> " . "Users aren`t registered " . '<a class="btn" href="registration.php">Check in</a><hr>' . "</h4>";
}

mysqli_close($conn);
?>



