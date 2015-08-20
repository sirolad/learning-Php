<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/20/15
 * Time: 1:21 PM
 */
$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";

mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysql_select_db($db_name) or die ("Could not connect to database!");

$result = mysql_query("SELECT * FROM users");

echo "<table width='90' align=center border=2>";
echo "<tr><td width='40' align='center' bgcolor='ffff00'>ID</td> "