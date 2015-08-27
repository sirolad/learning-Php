<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/23/15
 * Time: 9:33 PM
 */

$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";

mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysqli_select_db($db_name) or die ("Could not connect to database!");
mysqli_query("DELETE FROM users WHERE id = '".$_REQUEST['id']."' ");

echo "Deleted Successfully!";

mysqli_close();

include('links.php');