<?php
/**
数据访问练习
*/
/*
总结：
1.parent关键字可以调用父类中被子类重写了的方法
2.self关键字可以用来访问类自身的成员方法，也可以用于访问自身的静态成员和类常量；不能用于访问类自身的属性；使用常量的时候不需要在常量名称前加$符号
3. static关键字用于访问类自身定义的静态成员，访问静态属性时需要在属性前面添加$符号
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
	const CONST_VALUE = 'A constant value';
	private static $sValue = 'Static Value';
	public function test(){
		echo "ChildClass::test called\n";
		parent::test(); // 用parent关键字可以访问父类中被子类重写的方法
		self::called(); // 等同于 $this->called();
		echo self::CONST_VALUE."\n";
		echo static::$sValue."\n"; // 等同于selef::$sValue;
	}

	public function called(){
		echo "ChildClass::called() called\n";
	}
}

$obj = new ChildClass();
$obj->test();