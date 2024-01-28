<?php
	$byte = random_bytes(16);
	
	for($i=0; $i<strlen($byte); $i++){
		 printf("%08b\n", $byte[$i]);
	}
?>