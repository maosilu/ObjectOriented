<?php
/*
interface关键字用语定义接口
*/
interface ICanEat{
	//接口里面的额方法不需要有方法体
	public function eat($food);
}

// implements关键字用语表示类实现某个接口
class Human implements ICanEat{
	// 实现接口，必须实现接口中所有的方法
	public function eat($food){
		echo 'Human eating '.$food."\n";
	}
}

$obj = new Human();
$obj->eat('Apple');