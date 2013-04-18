<?php

$connection=mysql_connect("localhost","root","") or die("连接服务器失败");

mysql_select_db("zuitu_db",$connection) or die("选择数据库失败");
mysql_query ("set names'UTF8'");
$query1="select * from address where area='".'东城区'."'" ;


$result=mysql_query($query1) or die (print "查询失败1");
var_dump( is_null());echo "</br>";
print_r(mysql_fetch_array($result,MYSQL_ASSOC));
// print_r(mysql_fetch_array($result,MYSQL_ASSOC));
// echo ord('哈');
// $str = '哈';
// echo strlen('哈');
// for($i=0;$i<3;$i++){
	// echo ord($str[$i])."--";
// }
// echo chr('0x61');

echo number_format('1236548.25544',2,'.',',');
echo __LINE__;echo '<br/>';
class Example
{
    // 保存类实例在此属性中
    private static $instance;
    
    // 构造方法声明为private，防止直接创建对象
    private function __construct() 
    {
        echo 'I am constructed';
    }

    // singleton 方法
    public static function singleton() 
    {
	var_dump(self::$instance);
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    
    // Example类中的普通方法
    public function bark()
    {
        echo 'Woof!';
    }

    // 阻止用户复制对象实例
    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

}

// 这个写法会出错，因为构造方法被声明为private
// $test = new Example;

// 下面将得到Example类的单例对象
$test = Example::singleton();
$test = Example::singleton();
$test = Example::singleton();
$test->bark();
$test->bark();
echo "<br/><br>";
// 复制对象将导致一个E_USER_ERROR.
// $test_clone = clone $test;
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
      
        // 强制复制一份this->object， 否则仍然指向同一个对象
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);
echo "<br>";
print("Cloned Object:\n");
print_r($obj2);


?>




