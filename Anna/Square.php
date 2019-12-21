<?php
namespace Anna;

use core\EquationInterface;

Class Square extends Linear implements EquationInterface {
	protected function findDisc($a, $b, $c){
	  return pow($b,2) - 4 * $a * $c;
	}
	public function solve($a, $b, $c) {
		if($a != 0){
			$disc = $this->findDisc($a, $b, $c);
			if($dis > 0) {
				$x1 = (-$b + sqrt(($disc)))/(2 * $a);
				$x2 = (-$b - sqrt(($disc)))/(2 * $a);
				$this->x = Array($x1, $x2);
			} elseif($disc == 0) {
					$this->x = -$b/(2 * $a);
			} else {
				$this->x = false;
			}
			return $this->x;
			} 
		return $this->linearEquation($a, $b);
	}
}