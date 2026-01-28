<?php
session_start();
if(!isset($_SESSION['Login'])) {
    header("Location: index.php");
    exit;
}
   echo "<h1>Manawi aya bos</h1>";
   echo $_SESSION['Username'];
   ?>