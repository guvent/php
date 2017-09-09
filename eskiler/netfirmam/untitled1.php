
<html>
<head></head><body>

<?php

$xm = simplexml_load_file("config.xml");
foreach ($xm->page as $op)
{

	echo $yaz = $op->pageno."-";

}

?>

</body></html>