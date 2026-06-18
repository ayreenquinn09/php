<?php

session_start();

include(
"includes/db.php"
);

if(
isset(
$_POST['login']
)
){

$email =
$_POST['email'];

$password =
$_POST['password'];

$sql =

"

SELECT *
FROM users
WHERE email=?

";

$stmt =
$conn
->prepare(
$sql
);

$stmt
->bind_param(
"s",
$email
);

$stmt
->execute();

$result =
$stmt
->get_result();

$user =
$result
->fetch_assoc();

if(
$user
&&
password_verify(
$password,
$user['password']
)
){

$_SESSION['user']
=
$user['fullname'];

$_SESSION['role']
=
$user['role'];

if(
$user['role']
==
"user"
){

header(
"Location:user/dashboard.php"
);

}

elseif(
$user['role']
==
"helper"
){

header(
"Location:helper/dashboard.php"
);

}

}

}

?>

<link
rel="stylesheet"
href="assets/css/style.css"
>

<div class="card">

<h2>

Login

</h2>

<form method="POST">

<input
name="email"
placeholder="email"
required
>

<input
type="password"
placeholder="password"
required
>

<button
name="login"
>

Login

</button>

</form>

</div>