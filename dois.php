<?php

	$array = array(-1,0,1,2,-1,-4);
	print_r(Valida($array));

	function Valida ($array){
		$resultado = array();

		for ($i=0; $i <= count($array)-3; $i++) { 
			if (($array[$i] + $array[$i+1]  + $array[$i+2]) == 0) {
				$resultado[] = $array[$i]." + ".$array[$i+1]." + ".$array[$i+2]." = 0";
				return ($resultado);
			}
		}
		return;
	}
	


?>