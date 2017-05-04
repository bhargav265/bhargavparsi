
<html>
<body>

Your Text is: <?php 

$txt= $_POST["name"]; 
echo $txt;
$myfile = fopen("text.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
echo "<br>_________________________________________________________________________________________";
echo "summerization\n";

$command = escapeshellcmd('bash');

$output1 = shell_exec($command);
$command = escapeshellcmd('python abc.py');
$output = shell_exec($command);
echo $output;


?>
</body>
</html>
