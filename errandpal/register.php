<?php

include(
"includes/db.php"
);

if(
isset(
$_POST['register']
)
){

$name =
$_POST['name'];

$email =
$_POST['email'];

$password =
password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$role =
$_POST['role'];

$sql =

"

INSERT INTO users
(
fullname,
email,
password,
role
)

VALUES
(
?,
?,
?,
?
)

";

$stmt =
$conn
->prepare(
$sql
);

$stmt
->bind_param(
"ssss",
$name,
$email,
$password,
$role
);

$stmt
->execute();

header(
"Location: login.php"
);

}

?>

<link
rel="stylesheet"
href="assets/css/style.css"
>

<div class="card">

<h2>

Create Account

</h2>

<form method="POST">

<input
name="name"
placeholder="name"
required
>

<input
type="email"
placeholder="email"
required
>

<input
type="password"
placeholder="password"
required
>

<select
name="role"
>

<option>
user
</option>

<option>
helper
</option>

</select>

<button
name="register"
>

Register

</button>

</form>

</div>