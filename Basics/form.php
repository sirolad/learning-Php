<?php
/**
 * Created by PhpStorm.
 * User: sirolad
 * Date: 8/20/15
 * Time: 12:00 PM
 */
?>

<html>
<head>

</head>
<body>
<h2>Andela Application</h2>
<form method="post" action="insert.php">
    <table border="0" width="70%">
        <tr><td>Name: </td><td><input type="text" name="name"/><br></td></tr>
        <tr><td>Email: </td><td><input type="text" name="email" /><br></td></tr>
        <tr><td>Password: </td><td><input type="password" name="password" /><br></td></tr>
    </table>
    <p>
        <input  type="submit" value="register" />
        <input type="reset" value="reset"/>
    </p>
</form>

<p>
<h3>
    <center>
        <?php include("links.php"); ?>
    </center>
</h3>
</p>
</body>
</html>