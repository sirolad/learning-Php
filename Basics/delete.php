<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/20/15
 * Time: 1:21 PM
 */

echo "<h3>Choose an Id To Delete:</h3>";
$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";

mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysqli_select_db($db_name) or die ("Could not connect to database!");

$result = mysqli_query("SELECT * FROM users");

echo "<table width='90%' align=center border=2>";
echo "<tr><td width='40%' align='center' bgcolor='ffff00'>ID</td>
<td width='40%' align='center' bgcolor='ffff00'>NAME</td>
<td width='40%' align='center' bgcolor='ffff00'>EMAIL</td>
<td width='40%' align='center' bgcolor='ffff00'>PASSWORD</td>
 ";

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];

    echo "<tr><td align='center'><a href='delete1.php?ids=$id&names=$name&emails=$email&passwords=$password'>$id</a></td>
<td>$name</td><td>$email</td><td>$password</td></tr>";
}

echo "</table>";

mysqli_close;

include("links.php");