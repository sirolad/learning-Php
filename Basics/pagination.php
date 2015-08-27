<?php

/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/25/15
 * Time: 8:17 PM
 */
$server = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "testsite";
mysqli_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
mysqli_select_db($db_name) or die("Could not connect to database!");

$per_page = 6;
$query = mysqli_query("SELECT name FROM users");

while ($query_row = mysqli_fetch_assoc($)) {
  # code...
}