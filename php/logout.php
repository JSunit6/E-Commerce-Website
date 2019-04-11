<?php
session_start();
unset($_SESSION['username']);
header("Location: FootballWeb.php");
die();
?>