<?php
$today =date("Y-M-D");
$nextday= date("Y-M-D", strtotime($today . '+1 day'));
echo $nextday;
?>