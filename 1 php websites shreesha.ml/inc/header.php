<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/session.php';
session::init();



//logout mechanism is created here
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])){
    session::destroy();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shreesha B</title>
    <link rel="icon" href="./logo.jpg" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"> Welcome To Shreesha B Website</a>
        <div class="pos-f-t">
            <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
<?php
$userlogin = session::get("login");
if($userlogin == true){ ?>
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="./admin/index.php">admin<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="./photoeditor/index.html">Photo Editor<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="./Online_feedback/index.php?info=contact">contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?action=logout">Logout</a>
        </li>
<?php }else{ ?>
        <li class="nav-item">
            <a class="nav-link" href="./photoeditor/index.html">Photo Editor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="./Online_feedback/index.php?info=contact">contact</a>
        </li>
<?php } ?>
        </ul>

    </div>
</nav>

    
