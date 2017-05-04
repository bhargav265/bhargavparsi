<?php 
echo "in php\n";
echo "<br>";

$command = escapeshellcmd('bash');

$output1 = shell_exec($command);
$command = escapeshellcmd('python abc.py');
$output = shell_exec($command);
echo $output;
?>