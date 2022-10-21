<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

 <form method="POST">
<input type = "submit" name = "xd" value = "usuń">
</form>
<?php

if(isset($_POST['xd'])){
setcookie("adam", "", time() - 3600);}
?>
</body>
</html>