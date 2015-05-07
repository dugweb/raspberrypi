<?php ini_set('display_errors', 'On'); ?>
<html>
<head>
<meta charset="UTF-8" />
</head>


<?php
if (isset($_POST['LightON']))
{
var_dump($_POST['LightON']);
// $exec = exec("ping -c 3 -s 64 -t 64 8.8.8.8", $judist, $output);
$command = escapeshellcmd("python /var/www/raspberrypi/8-Relay-Module/relay_test.py")
$exec = exec($command, $judist, $output);
echo $exec;
echo '<br />------------<br />';
print_r($output);
}
?>

<form method="post">
<button class="btn" name="LightON" value="true">Test Relay</button>
</form> 


</html>
