<?php
//echo "Chat is in work of progress.";
$dbhost = "localhost";
$dbuser = "user";
$dbpass = "pass";
$dbname = "yourdatabasenamehere";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$username = "";

if(!$conn) {
 echo "Failed to connect!";
 exit;//If the php error pops up then add a () at the end of exit like this "exit();"
}

mysql_select_db($dbname);

$username = $_COOKIE['username'];//This cookie should be set at login.php otherwise there is no way for the user to chat.
if ($username == "") {
 echo "Please login before chatting.";
 exit;//Same as before with the exit if all fails.
} else {
 if(isset($_POST
?>
