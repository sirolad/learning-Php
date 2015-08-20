<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/20/15
 * Time: 12:40 PM
 */
$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";

mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysql_select_db($db_name) or die ("Could not connect to database!");

$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result)){
    echo $row['name']." ".$row['email']." ".$row['password'];
    echo "<br>";
}

mysql_close;
?>
<p>
<h3>
    <center>
        <?php include("links.php"); ?>
    </center>
</h3>
</p>

