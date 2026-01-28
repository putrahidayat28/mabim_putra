<?php
session_start();
if(!isset($_SESSION['Login'])) {
    header("Location: index.php");
    exit;
}
   echo "<h1>mantap</h1>";
   echo $_SESSION['Username'];
   ?>