<html>
<body>
<?php
$con = mysqli_connect("localhost","root","") or die("database is not available!");
mysqli_select_db($con, "test") or die("database is not available!");
$sql="INSERT INTO data (firstName, lastName)
VALUES
('$_POST[fname]','$_POST[lname]')";
if (!mysqli_query($con, $sql))
  {
  die("data is not available!");
  }
echo "1 record added";
mysqli_close($con)
?>
</body>
</html>