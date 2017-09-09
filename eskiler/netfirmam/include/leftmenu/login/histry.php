<?php
$luad=$_POST["username"]; $lupass=$_POST["password"];
setcookie("username",$luadd,7200);
setcookie("password",$lupass,7200);

echo '<meta http-equiv="refresh" content="2 url=../../../index.php" />';
?>