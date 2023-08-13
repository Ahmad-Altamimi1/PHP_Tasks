 <?php
         //  PDO 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "group5";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // sql to delete a record
//   $sql = "DELETE FROM studant WHERE id =3";

//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Record deleted successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;

?> 


          <!-- MySQLi Object-Oriented -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM studant WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
                  <!-- (MySQLi Procedural) -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM group5 WHERE id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'my_db';

$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Connected Successfully</h1>";

if (isset($_POST['submit'])) {
    $stuEmail = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT id, pass, stu_email FROM students WHERE stu_email='$stuEmail' AND pass='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row['pass'] . "<br>";

        }
    }else{
        echo "<h1>register first</h1>";
    }
}

// if (isset($_POST['submit'])) {
//     $stuEmail = $_POST['email'];
//     $pass = $_POST['password'];
//     $sql = "SELECT id, pass, stu_email FROM students WHERE stu_email=? AND pass=?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "ss", $stuEmail, $pass);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             echo $row['pass'] . "<br>";
//             echo "test";
//         }
//     }else{
//         echo "<h1>register first</h1>";
//     }
// }
?>
<form action="./success.php" method="post">
        your Email: <input type="text" name="email">
        your password: <input type="text" name="password">
        <button type="submit" name="submit">Submit</button>
    </form>
