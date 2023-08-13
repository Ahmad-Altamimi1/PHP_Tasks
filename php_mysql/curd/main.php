<?php 
include_once("get_DB.php");
include_once("add_form.php");
if (isset($_GET['id'])) {
    $id= $_GET['id'];
   
    $delet_query="DELETE From users_info where id=$id";
    mysqli_query($conecct,$delet_query);
}
$viwe="SELECT * FROM users_info ";
$result= mysqli_query($conecct,$viwe);
if (mysqli_num_rows($result)>0) {
$row= mysqli_fetch_all($result);
    // print_r($row);
    // print_r($row);
    echo "<table border='1' >";



 foreach ($row as $value) {


?>


  <tr style='display:flex; ' >
  <td> <?php echo $value[0] ?>  </td>
  <td> <?php echo $value[1] ?>  </td>
  <td><?php echo $value[2] ?> </td>
  <td> <?php echo $value[3] ?>  </td>
  <td> <?php echo $value[4] ?>  </td>
<td><a href='main.php?id=<?php echo $value[0] ?>'>Delete</a> </td>

 <td><a href='update.php?id=<?php echo $value[0] ?> '>Update</a></td>
  </tr>
<?php 
 } 
?>
</table>



<?php
}

$delet_qury="DELETE FROM users WHERE id= "

?>
