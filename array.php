<!-- array_chunk()   splits an array into chunks of new arrays
 array_chunk(array size, preserve_key) -->
<?php
$course= array("PHP","Larvavel","Node Js","HTML","CSS");
print_r(array_chunk($course,1));