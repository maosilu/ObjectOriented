<?php
/*
重写（overwrite）：子类中编写跟父类方法名完全一致的方法
*/

/*
final:
1.如果不想被任何类继承，可以在class之前添加final关键字
2.如果父类中的方法不想被子类重写，可以在方法前添加final关键字
*/
final class BaseClass{
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