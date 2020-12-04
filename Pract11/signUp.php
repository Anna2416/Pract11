<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

$target_dir = "public/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$first_name = $_POST["first_name"];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$id_role = $_POST['id_role'];

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<h4 align='center'>File is not an image.</h4>";
        $uploadOk = 0;
    }
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<h4 align='center'>Sorry, your file is too large.</h4>";
    $uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "<h4 align='center'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h4>";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "<h4 align='center'>Sorry, your data were not registered.</h4><br>";
    echo "<h4>Try again: " . '<a class="btn" href="registration.php">Registration</a><hr></h4>';
    echo "<br><h4>Back to Sign In, click: ". '<a class="btn" href="login.php">Sign In</a><hr><h4>';

} else {
    $sql = "INSERT INTO users (id, first_name, last_name, login, password, id_role, img) VALUES (Null, '$first_name', '$last_name', '$login', '$password', '$id_role', '$target_file')";
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) != false and mysqli_query($conn, $sql) != false) {
        header('Location: login.php');
    } else {
        echo "<h4 align='center'>Sorry, your data were not registered.</h4><br>";
        echo "<h4>Try again: " . '<a class="btn" href="registration.php">Registration</a><hr></h4>';
        echo "<br><h4>Back to Sign In, click: ". '<a class="btn" href="login.php">Sign In</a><hr><h4>';
    }
}
mysqli_close($conn);
?>