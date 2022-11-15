<?php
$a = $_GET["put"].replace(" ", "").replace("\n", "");
file_put_contents("aa.txt", $a, FILE_APPEND);
echo "done";
?>
