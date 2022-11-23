<?php

	$array = array((array(2, 7, 7, 1, 8, 2, 7, 8, 7)), 16);
	print_r(Valida($array));

	function Valida ($array){
		$resultado = array();

		for ($i=0; $i <= count($array[0])-3; $i++) { 
			if (($array[0][$i] + $array[0][$i+1]  + $array[0][$i+2]) == $array[1]) {
				$resultado[] = $array[0][$i]." + ".$array[0][$i+1]." + ".$array[0][$i+2]." = ".$array[1];
			}
		}
		return ($resultado);
	}

?>