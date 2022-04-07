<?php
session_start();

    $_SESSION["logged"]=true;

    if(isset($_SESSION["logged"])) {
        require("main.php");
    } else {
        require("login.php");
    }
?>