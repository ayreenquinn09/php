<?php

include(
"../includes/auth.php"
);

checkLogin();

roleOnly(
"user"
);

?>

<link
rel="stylesheet"
href="../assets/css/style.css"
>

<div class="hero">

<h1>

Hello

<?=
$_SESSION['user']
?>

🌸

</h1>

<p>

Welcome to ErrandPal

</p>

<a href="post_task.php">

<button>

Post Task

</button>

</a>

</div>