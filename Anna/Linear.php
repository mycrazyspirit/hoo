<?php
namespace Anna;

Class Linear {
	protected $x;	
	public function getX() {
		return $this->x;
	}	
	public function setX($num) {
		$this->x = $num;
	}	
	public function linearEquation($a, $b) {
		if($a != 0){
			return $this->x = -$b/$a;
		} 
		return false;
	}
}

