<?php
namespace Anna;

use core\LogAbstract;
use core\LogInterface;
Class MyLog extends LogAbstract implements LogInterface {
	public static function wtite(){
		MyLog::Instanse()->_write();
	}
	public static function log($str){
		MyLog::Instanse()->log[] = $str;
	}
	public function _write(){
		echo implode("\n", $this->log);
	}
}