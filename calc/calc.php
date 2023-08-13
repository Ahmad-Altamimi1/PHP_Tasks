<?php
session_start();


















echo 'welcome ' .$_SESSION["username"];
$Result=" ";
if (isset($_POST["First"]) && isset($_POST["seconde"])) {
$num1=(int)$_POST["First"];
$num2=(int)$_POST["seconde"];
$op=$_POST["opretor"];
if (isset($op)) {
   
if ($op=="+") {
   $Result= $num1+$num2;
}
if ($op=="-") {
   $Result= $num1-$num2;
}
if ($op=="*") {
   $Result= $num1*$num2;
}
if ($op=="/") {
   $Result= $num1/$num2;
}
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cal</title>
    <style>

    </style>
</head>
<body><form action="" method="post">
      First Number :  <input type="text" name="First" value=" "> 
      seconde Number <input type="text" name="seconde" value=" ">
         <input type="submit" value="-" name="opretor">
      <input type="submit" value="+" name="opretor">
      <input type="submit" value="*"  name="opretor">
      <input type="submit" value="/" name="opretor">
      Result:  <input type="text" name="Result" value="<?php /*isset($_POST["Result"])?if (isset($op)) */echo  $Result?>">
      </form>
</body>
</html>