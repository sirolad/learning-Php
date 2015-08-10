<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/10/15
 * Time: 10:59 AM
 */

    $task = strip_tags($_POST['task']);
    $date = date('Y-m-d');//Today %u2019s date
    $time = date('H:i:s');// Current time

    require("connect.php");

    mysql_query("INSERT INTO tasks VALUES('','$task','$date','$time')");

    $query = mysql_query("SELECT * FROM tasks WHERE task= '$task' and date = '$date' and time = '$time' ");

    while($row = mysql_fetch_assoc($query)){
        $task_id = $row['id'];
        $task_name = $row['task'];
    }

    mysqli_close();

    echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'"
    class="delete-button" width="10px" src="images/close.svg" /></li>';
