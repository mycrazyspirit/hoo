<?php
namespace Anna;
class Linear {
	
	protected $x = array();
	
		
	public function getX() {
		return $this->x;
	}
		
	public function setX($num) {
		$this->x = $num;
	}
		
	public function linearEquation($a, $b) {
			if($a != 0){
				MyLog::log("This linear equation");
				$this->x =array(
					($b * (-1))/$a
				);
				return $this->x; 
			}
			throw new AnnaException("Takoye uravneniye ne sushchestvuyet \n");
	}
}

