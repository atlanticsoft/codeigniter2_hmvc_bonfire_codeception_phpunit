<?php
$output = shell_exec('php codecept.phar run');

$output=str_replace("Failed","<font color='red'>Failed</font>",$output);
$output=str_replace("failure","<font color='red'>failure</font>",$output);
$output=str_replace("FAILURES","<font color='red'>FAILURES</font>",$output);


$output=str_replace("Ok","<font color='green'>Ok</font>",$output);
 


echo "<pre>$output</pre>";
?>