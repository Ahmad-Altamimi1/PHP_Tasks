<?php
$username=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$Add=$_POST["Add"];
include_once("get_DB.php");
if (isset($Add)) {
   
$qury= "INSERT INTO users_info (namee,email,age,phone)
Value ('$username','$email',$age,$phone)" ;
mysqli_query($conecct,$qury);

};

?>