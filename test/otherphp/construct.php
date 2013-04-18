<?php
class DB 
{
	public function __construct() {
	print "create";
	}

	public static function echonum (){
	echo '1111';
	}

}
$t= new DB;$t->echonum();
echo $_SERVER['REQUEST_METHOD'];