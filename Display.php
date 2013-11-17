<?php
include "Database.php";
$id = $_GET['username'];
echo "<p> Welcome to TechBox ";
echo $id;
echo "</p>";

$db = mysqli_connect("engr-cpanel-mysql.engr.illinois.edu", "peng20_TechBox", "cs411", "peng20_TechBox");
if (mysqli_connect_errno()){
   	echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
}
Database::select($db, $id);
print "<br/>";
?>
<br/>
<a href = "/~peng20/411TechBox/add_feeds.php" class='button'>Insert a url