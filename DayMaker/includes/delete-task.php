<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/10/15
 * Time: 12:35 PM
 */
    $task_id = strip_tags($_POST['task_id']);
    require("connect.php");
    mysql_query("DELETE FROM tasks WHERE id='$task_id'");

