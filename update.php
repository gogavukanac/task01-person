<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
//include 'index.php';
$content = file_get_contents("test.json");
$person = json_decode($content, true);
var_dump($person);
?>
<form action="save.php" method="post">
User email:<br>
<input type="email" name="email" value="<?php echo $person['email'];?>">
<br>
User password:<br>
<input type="text" name="psw" value="<?php echo $person['password'];?>">
<br><br>
<input type="submit" value="Submit">
</form>

 