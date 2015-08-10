<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/10/15
 * Time: 9:07 AM
 */
    $server = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "daymaker";

    mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
    mysql_select_db($db_name) or die ("Could not connect to database!");

