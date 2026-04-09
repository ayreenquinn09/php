<?php



$correct_user = "A1133336";   // replace with your own
$correct_pass = "ayreen";      // replace with your own


$username = $_POST['username'];
$password = $_POST['password'];


if ($username === $correct_user && $password === $correct_pass) {
    header("Location: application.php");
    exit();
} else {
    echo "<script>alert('Login failed!'); window.location='login.php';</script>";
    exit();
}
?>