<?php
$val= $_GET["f"];
echo  $val*2;
$myfile = fopen("new.json", "w") or die("Unable to open file!");
$txt = "value #".$val."\n";
fwrite($myfile, $txt);

fclose($myfile);
?>
