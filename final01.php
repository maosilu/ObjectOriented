<?php
/*
重写（overwrite）：子类中编写跟父类方法名完全一致的方法
*/
class BaseClass{
	public function test(){
		echo "BaseClass::test called\n";
	}

//添加final关键字能够让此方法不能在子类中重写
	final public function test1(){
		echo "BaseClass::test1 called\n";
	}
}

class ChildClass extends BaseClass{
	public function test($tmp){
		echo "ChildClass::test called ".$tmp."\n";
	}
}

$obj = new ChildClass();
$obj->test('123');
$obj->test1();