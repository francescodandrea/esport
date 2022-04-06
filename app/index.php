<?php
session_start();

    if(isset($_SESSION["logged"])) {
        require("main.php");
    } else {
        require("login.php");
    }
?>