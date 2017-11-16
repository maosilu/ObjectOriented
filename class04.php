<?php
/**
数据访问练习
*/
class BaseClass{
	public function test(){
		echo "BaseClass::test called\n";
	}

	public function test1(){
		echo "BaseClass::test1 called\n";
	}
}

class ChildClass extends BaseClass{
	public function test(){
		echo "ChildClass::test called\n";
		parent::test(); // 用parent关键字可以访问父类中被子类重写的方法
		self::called(); // 等同于 $this->called();
	}

	public function called(){
		echo "ChildClass::called() called\n";
	}
}

$obj = new ChildClass();
$obj->test('123');