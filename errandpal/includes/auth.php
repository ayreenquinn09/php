<?php

session_start();

function checkLogin()
{
    if (!isset($_SESSION['user'])) {

        header(
            "Location: ../login.php"
        );

        exit();
    }
}

function roleOnly($role)
{
    if ($_SESSION['role'] != $role) {

        die("Access denied");

    }
}

?>