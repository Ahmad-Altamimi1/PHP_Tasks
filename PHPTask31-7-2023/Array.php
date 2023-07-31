   <?php
   echo " Q1.............................................. ";
   $color= array("White","green","red");
   foreach ($color as  $value) {
    echo"<li>$value</li> ";
   }
   echo " Q2.............................................. <br>";


   $cities = array(
"Italy" => "Rome",
"Luxembourg" => "Luxembourg",
"Belgium" => "Brussels",
"Denmark" => "Copenhagen",
"Finland" => "Helsinki",
"France" => "Paris",
"Slovakia" => "Bratislava",
"Slovenia" => "Ljubljana",
"Germany" => "Berlin",
"Greece" => "Athens",
"Ireland" => "Dublin",
"Netherlands" => "Amsterdam",
"Portugal" => "Lisbon",
"Spain" => "Madrid"
);
asort($cities);

foreach ($cities as $key => $value) {
   echo "The capital of $key is $value <br> ";
}
echo "<br>";
   echo "<br> Q3.............................................. <br>";
   $color= array(4 =>"White",6=>"green",11=>"red");
   echo$color[4];

   echo "<br> Q4.............................................. <br>";
$fruits=["d"=>"lemon","a"=>"orang" ];
foreach ($fruits as $key => $value) {
   echo "$key = $value <br>";
}

   ?>