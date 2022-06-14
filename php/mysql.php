
<?php
/* 
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
?>

<?php

// PDO - DB connection
$servername = "localhost";
$username = "root";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=drupal", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "sakila";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM actor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["actor_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>