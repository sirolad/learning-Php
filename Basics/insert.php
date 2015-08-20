<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/20/15
 * Time: 12:00 PM
 */
$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ( $name && $email && $password ){
    mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
    mysql_select_db($db_name) or die ("Could not connect to database!");
    mysql_query("INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')");
    $registered = mysql_affected_rows();

    echo "$registered was inserted";

} else {
    echo "You have to complete the form!";
}

mysql_close();