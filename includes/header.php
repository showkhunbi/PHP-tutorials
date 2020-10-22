<?php
session_start();
require_once "./includes/database.php";
require_once "./includes/register-inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleLandR.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="LandR.php">Home</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>