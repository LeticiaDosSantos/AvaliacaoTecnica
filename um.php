<?php

	$array = array(1,2,3,6,7,8);
	print_r(Valida($array));

	function Valida ($array){
		$resultado = array();

		for ($i=0; $i < count($array)-1; $i++) { 
			if ($i > 0 && $array[$i] != $array[$i-1]+1) 
				$resultado[" ".$i." "] = $array[$i-1]+1;
			else if ($array[$i] != $array[$i+1]-1) 
				$resultado[" ".($i+2)." "] = $array[$i+1]-1;
		}

		array_multisort($resultado);
		return ($resultado);
	}

?>