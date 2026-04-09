<?php
function safe($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$name = $_POST['name'] ?? '';
$gender = $_POST['gender'] ?? '';
$grade = $_POST['grade'] ?? '';
$birthday = $_POST['birthday'] ?? '';
$tel = $_POST['tel'] ?? '';
$email = $_POST['email'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Result - New York Summer Camp</title>
<style>
    body {
        background-color: #fde7f5;
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    h2 {
        color: #cc0000;
        text-align: center;
    }

    .result-container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
    }

    .result-container p {
        font-size: 16px;
        margin: 10px 0;
    }

    .back-btn {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #cc0000;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .back-btn:hover {
        background-color: #a00000;
    }
</style>
</head>
<body>

<h2>New York Summer Camp Application Result</h2>

<div class="result-container">
    <p><b>Full Name:</b> <?= safe($name) ?></p>
    <p><b>Gender:</b> <?= safe($gender) ?></p>
    <p><b>Grade:</b> <?= safe($grade) ?></p>
    <p><b>Date of Birth:</b> <?= safe($birthday) ?></p>
    <p><b>Contact Number:</b> <?= safe($tel) ?></p>
    <p><b>Email:</b> <?= safe($email) ?></p>
</div>

</body>
</html>