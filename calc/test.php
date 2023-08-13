<?php 
session_start();

// if (isset($_POST['login'])) {
   if (isset($_POST['username']) && isset($_POST['password'])) {
     
      $_SESSION["password"]=$_POST["password"];
      $_SESSION["username"]=$_POST["username"];
      header("Location: calc.php");
   }else{
    header("location: login.php");
}
?>