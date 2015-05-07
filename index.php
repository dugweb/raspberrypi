<?php ini_set('display_errors', 'On'); ?>
<html>
<head>
<meta charset="UTF-8" />
</head>


<?php
$command = "";
if (isset($_POST['LightON']))
{
	$command = escapeshellcmd("python /var/www/raspberrypi/8-Relay-Module/relay_test.py");	
} else if (isset($_POST['fastSwitch'])) {
	$command = escapeshellcmd("python /var/www/raspberrypi/8-Relay-Module/fast_switch.py");
}

echo $command;
$exec = exec($command, $judist, $output);
echo "$exec";
echo '<br />------------<br />';
print_r($output);


?>


<h2>Pi Commands</h2>

<form method="post">
	<button class="btn" name="LightON" value="true">Test Relay</button>
</form> 

<form method="post">
	<button class="btn" name="fastSwitch" value="true">Fast Switch</button>
</form> 



</html>
