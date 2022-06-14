<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

echo "<br>";

//Arrays
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";
print count($cars);

//GLOBALS
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE']; // will show CGI/1.1
echo "<br>";
echo $_SERVER['REQUEST_METHOD']; // POST

//RegEx - preg
echo "<br>";
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match_all($pattern, $str); // Outputs 1

//datetime
echo "<br>";
date_default_timezone_set("America/Chicago");
echo "The time is " . date("h:i:sa");
echo "<br>";
echo "The date is " . date("m/d/Y");


console.log(date("m/d/y"));

?>



</body>
</html>