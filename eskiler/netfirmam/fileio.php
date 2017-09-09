


<?php

$files = fopen("config.php","w");

$pageno = "pagetotal:5\n";

$pagad = "pagname:menu";

fwrite($files,$pageno);

fwrite($files,$pagad);

fclose($files);


?>