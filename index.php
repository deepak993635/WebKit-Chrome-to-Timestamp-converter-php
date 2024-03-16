<?php
function webkittoepoch($webkit) {
$secondsBetween19701601 = 11644473600;
 return $webkit / 1000000 - $secondsBetween19701601;
}
 
 
 
echo  webkittoepoch(13354872076993437);




?>
