<?php

	$valor = 8;
	print_r(Valida($valor));

	function Valida ($valor){
		$contador = 0;
		$resultado = array();

		while ($contador <= $valor-1) {

			if($contador <= 1)
				$resultado[] = 1;
			else
				$resultado[] = $resultado[$contador-1] + $resultado[$contador-2];
			$contador++;
		}

		return $resultado;
	}
	
?>