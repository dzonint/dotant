<?php
// Convert 32 bit profile ID from JSON to 64 bit.
if(isset($_REQUEST['id32'])){
$result = '765'.($_REQUEST['id32'] + 61197960265728);
echo (string) $result;}

// Vice versa.
if(isset($_REQUEST['id64'])){
$result = substr($_REQUEST['id64'], 3) - 61197960265728;
echo (string) $result;}
?>