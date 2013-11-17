 <?php 
//session_start(); 
//ob_start();
include "Database.php";
$host="engr-cpanel-mysql.engr.illinois.edu"; // Host name 
$db_username="peng20_TechBox"; // Mysql username 
$db_password="cs411"; // Mysql password 
$db_name="peng20_TechBox"; // Database name 
$tbl_name="Accounts"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

if(!$myusername|!$mypassword)
{
    die('Username or Password cannot be empty!');
}

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$check = 0;
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

$_SESSION["myusername"] = $myusername;
$_SESSION["password"] = $mypassword; 
//header("location:login_success.php");
//*********Add the user profile page url here if login successfully**********




echo "password matched";
$check = 1;
echo "<META HTTP-EQUIV='Refresh' CONTENT='1.5; URL=Display.php?username=" , $myusername , "'>";
}
else {
echo "Wrong Username or Password";
}
?>