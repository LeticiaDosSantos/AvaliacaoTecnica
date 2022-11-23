<?php

	$array = array(5, 3, 4, 3, 5, 5, 3);
	print_r($array);
	array_multisort($array);
	print_r($array);
	print_r(Valida($array));

	function Valida ($array){
		$resultado = array();

		for ($i=0; $i <= count($array)-3; $i++) { 
			if ($array[$i] != $array[$i+1] && $array[$i] != $array[$i+2]) {
				if ($array[$i] != $array[$i-1]) {
					return ("\nSingle Number: ".$array[$i]);
				}else if($array[$i+3] != $array[$i+4] && $array[$i+3] != $array[$i+2])
					return ("\nSingle Number: ".$array[$i+3]);
				else
					return ("\nSingle Number: ".$array[$i+4]);
			}
		}
		return;
	}

?>