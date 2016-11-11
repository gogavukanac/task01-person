<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<body>

<form action="save.php" method="post">
User email:<br>
<input type="email" name="email">
<br>
User password:<br>
<input type="password" name="psw">
<br><br>
<input type="submit" value="Submit">
</form>


</body>
</html>
