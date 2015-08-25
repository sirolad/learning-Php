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

mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysql_select_db($db_name) or die ("Could not connect to database!");
mysql_query("DELETE FROM users WHERE id = '".$_REQUEST['id']."' ");

echo "Deleted Successfully!";

mysql_close();

include('links.php');