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
$cpassword = $_POST['cpassword'];

if ($name && $email && $password && $cpassword) {
    if (strlen($password > 3)) {
        if ($password == $cpassword) {
            mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
            mysql_select_db($db_name) or die("Could not connect to database!");
            $username = mysql_query("SELECT name FROM users WHERE name='$name'");
            $count = mysql_num_rows($username);
            $remail = mysql_query("SELECT email FROM users WHERE email='$email'");
            $checkmail = mysql_num_rows($remail);

            if ($checkmail != 0) {
                echo "Email is not Available!";
            } else {
                if ($count != 0) {
                    echo "This User has already been registerd!";
                } else {
                    mysql_query("INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')");

                    //$registered = mysql_affected_rows();

                    echo "Successfully Registered";
                }
            }
        } else {
            echo "Passwords does not match!";
        }
    } else {
        echo "Password too short, at least 8 characters!";
    }
} else {
    echo "You have to complete the form!";
}

mysql_close();

include("links.php");
