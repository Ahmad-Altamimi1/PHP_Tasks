<?php 

class Name{
    const HELLO="ABC";
  public  $name;
   public $age;
   public function __construct($name,$age){
    $this->name=$name;
    $this->age=$age;

   }
   public function intro(){
    echo "HI {$this->name} Your Age Is {$this->age}";
   }
}
echo Name::HELLO;
$ahmade=new Name("Ahmad",23);
 echo $ahmade->name;
 class Masseg extends Name{
public function intro(){
    $Need=2023-$this->age;
    echo "Your Year is $Need";
}
 }
$masseg= new Masseg("Ali","19");
echo $masseg->intro(); 
echo "<br>";
echo<<<'Ahmad'
ahmad
\\\\

al tmai
Ahmad;
$jordan=["Irbid","Amman"];
var_dump($jordan);
print_r($jordan);
echo gettype(10.4);
var_dump(10.4);
?>