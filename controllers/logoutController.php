<?php
 require '../config/session.php';
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
session_destroy();
header('location: ../pages/login.php');
 }
?>