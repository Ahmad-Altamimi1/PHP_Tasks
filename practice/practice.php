<?php 
// $name="ahmad";
// $$name="Altamimi";
// echo $ahmad;
// echo "hello {$$name}";
define("user","rb");
// echo user;
// echo php_uname();
// echo PHP_VERSION;
// echo __CLASS__;
// echo __FILE__   ;
$score=[1,4,5,6,8];
// echo max($score);
$score1=[1,4,5,6,-8,4.45];
// echo(abs($score1[4]));
// echo(round($score1[5]));
// $paragraph="hello gyes yes";
// $pattren="/es/i";
// echo preg_match($pattren,$paragraph);
// echo "<br>";
// echo preg_match_all($pattren,$paragraph);
// echo "<br>";
// echo "<br>";
// echo preg_replace($pattren,"no" ,$paragraph);
// // echo preg_split();
// echo "<br>";
// echo$_SERVER["PHP_SELF"];
// echo "<br>";
// echo __FILE__ ;
// echo "<br>";
// echo htmlspecialchars("<span>");
// echo "<br>";
//  echo htmlspecialchars($_SERVER["PHP_SELF"]);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// $barithday=mktime(56,16,5,1999);
// echo "my barithday";
// echo date("d-m-y",$barithday) ;
// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);

// echo date_default_timezone_set("Asia/Riyadh");
// echo "Today is " . date("d/m/Y") . "<br>";
// echo "houre is " . date("h-i-s(a)") . "<br>";
// echo "Today is " . date("l");

// echo readfile("file.text");
// echo fopen("file.text","r");


// echo "<br>";
// echo "<br>";
// function calc (...$ar){
//     $a=0;
//     for ($i=0; $i <count($ar) ; $i++) { 
//            $a+= $ar[$i];

//     }
//    echo func_num_args(); 
//    echo "<br>";
//    echo func_get_arg(0);
//   print_r( func_get_args());
//    echo "<br>";
//     return $a;

// }
// echo calc(1,6,35,52);
// echo  boolean((function_exists("calc")));
// strlen("ahmad");
// $name="murad";
// $FILTTER= filter_var($name,"FILTER_SANITIZE_STRING");

// $str = "Hello World!";

// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $newstr;
?>
<?php
$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";
echo php_ini_loaded_file();
// mail($to,$subject,$message,$headers);






?>