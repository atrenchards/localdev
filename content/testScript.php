<?php
ob_start();   
$limit = 100000;
for($i=0; $i<$limit; $i++){
	echo "dickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbuttdickbutt";
}
$content = ob_get_clean();
header("content-length: " . strlen($content));
echo $content;