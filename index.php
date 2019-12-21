<?php
class B {

}
Class ClassA extends ClassB {
	public function _construcct ($obj1, $obj2,$obj3) {
		$this->$obj1 = $obj1;
		$this->$obj2 = $obj2;
		$this->$obj3 = $obj3;
	}
	public $obj1;
	public $obj2;
	public $obj3;
}
$obj1 = new ClassB();
$obj2 = new ClassB();
$obj3 = new ClassB();
$obj4 = new ClassA($obj1);
$obj5 = new ClassA($obj2, $obj3, $obj4);
?>