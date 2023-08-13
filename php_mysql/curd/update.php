
<?php
include_once("get_DB.php");
    $id = $_GET['id'];

if (isset($_POST['update1'])) {
    $name= $_POST['username'];
    $email= $_POST['email'];
    $age= $_POST['age'];
    $phone= $_POST['phone'];
    $update_query="UPDATE `users_info` SET `namee`='$name',`email`='$email',`age`=$age,`phone`=$phone Where id=$id" ;
    mysqli_query($conecct,$update_query);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM users_info WHERE id=?";
    $stmt = mysqli_prepare($conecct, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        print_r($row);
    } else {
        echo "No user found.";
    }
    mysqli_stmt_close($stmt);
}
?>
<form action="" method="post">
    <input type="text" name="username" value="<?php echo htmlspecialchars($row['namee']); ?>">
    <input type="text" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">
    <input type="text" name="age" value="<?php echo htmlspecialchars($row['age']); ?>">
    <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>">
    <input type="submit" value="update" name="update1">
</form>
