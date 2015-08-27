<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/23/15
 * Time: 7:59 PM
 */

$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";

$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = $_REQUEST['newpassword'];

mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysqli_select_db($db_name) or die("Could not connect to database!");

mysqli_query("UPDATE users SET name='$newname', email= '$newemail', password='$newpassword'
WHERE id='$id'");

echo "Success!";

mysqli_close();

include('links.php');