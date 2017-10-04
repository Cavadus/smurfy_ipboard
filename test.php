<?php
$s = "http://mwo.smurfy-net.de/mechlab#i=16&l=71a1896409db5818783971b72ba043f5f3a44fad";
$matches = array();
$result = preg_match('/i=(?P<iVal>[0-9]+)&l=(?P<lVal>[a-z0-9]+)$/siU', $s, $matches);
echo $matches['iVal'];
echo $matches['lVal'];
?>
