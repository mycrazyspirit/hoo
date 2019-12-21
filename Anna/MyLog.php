<?php
namespace Anna;

use core\LogAbstract;
use core\LogInterface;

Class MyLog extends LogAbstract implements LogInterface {

	public static function write(){
		return MyLog::Instance()->_write();
	}

	public static function log($str){
		MyLog::Instance()->log[] = $str;
	}
	
	public function _write() {
		echo implode("\n", MyLog::Instance()->log);
	}
}
