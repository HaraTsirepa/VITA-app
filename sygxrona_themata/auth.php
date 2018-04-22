<?php
session_start();
if(!isset($_SESSION["username"])){
if(!isset($_SESSION["status"])){
header("Location: LogInAdmin.php");
exit(); }}
?>