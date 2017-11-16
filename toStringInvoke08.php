<?php
/*
两种魔术方法：
__toString() && __invoke()的测试
*/
class MagicTest{
	//__toString() 会在把对象当作String使用的时候自动调用
	public function __toString(){
		return "This is the class MagicTest.\n";
	}
	//__invoke()会在把对象当作一个函数使用的时候自动调用
	public function __invoke($x){
		echo "__invoke called with parameter $x.\n";
	}
}
$obj = new MagicTest();
echo $obj;
$obj(5);