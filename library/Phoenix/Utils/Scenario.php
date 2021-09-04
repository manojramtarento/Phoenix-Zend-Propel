<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Scenario
 *
 * @author consult
 */
class Phoenix_Utils_Scenario {
	
	static function removeNumeroInMathExpr($numero,$expression){
		$pattern = '/^[0-9]+$/';
		
		if (preg_match($pattern, $expression) == 0) {
			$pattern = '/[0-9]+/';
			$reference = preg_replace($pattern, '#${0}#', $expression);

			$count = 0;
			$reference = preg_replace('/[-+*]#' . $numero . '#/', '', $reference, -1, $count);
			if ($count == 0) {
				$pattern = '/#' . $numero . '#[-+*]/';
				$reference = preg_replace($pattern, '', $reference);
			}
			$reference = str_replace('#', '', $reference);
		} else {
			$reference = '';
		}
		
		return $reference;
	}
}

?>
