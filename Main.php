<?php
function main()
{

	$str = "Hello worLLd";

	$arr = str_split($str);
	
	for ($i = 0; $i < count($arr); $i++){
		if (ord($arr[$i]) >= 65 && ord($arr[$i]) <= 90){
			$arr[$i] = chr(ord($arr[$i])+32);
			continue;
		}
		if (ord($arr[$i]) >= 97 && ord($arr[$i]) <= 122){
			$arr[$i] = chr(ord($arr[$i])-32);
			continue;
		}
	}

	echo ($str."\n");
	echo (implode($arr)."\n");
}

main();

?>