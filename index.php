<?php

Class linear1 {			//aX+b = 0
	protected function linear($a, $b){
		if ($a==0) {
			return false;
		}
		return 	$this->x = (-1*$b)/$c;
	}
	protected $x ;
}			

Class square1 extends linear1 {
	protected function Disc($a,$b,$c){
		return pow($b,2) - 4*$a*$c;
	}
	protected function square($a, $b, $c) {
		if ($a==0) {
			return $x = (-1*$c)/$b;
		}
		 else {
			if ($disc>0) {
				$x1 = (-1*$b+sqrt($disc))/(2*$a);
				$x2 = (-1*$b-sqrt($disc))/(2*$a);
			} elseif ($d==0) {
				$x1 = $x2 = (-$b)/(2*$a);
			} else {
				$x1 = -1*$b + sqrt(abs($disc));
				$x2 = -1*$b - sqrt(abs($disc));
			}
		}
		return array($x1, $x2);
}	
protected $x1;
protected $x2;
}
?>