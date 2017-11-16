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

class Animal implements ICanEat{
	// 实现接口，必须实现接口中所有的方法
	public function eat($food){
		echo 'Animal eating '.$food."\n";
	}
}

$man = new Human();
$man->eat('Apple');

$monkey = new Animal();
$monkey->eat('banana');

//不能实例化接口，以下实例化操作是错误的
// $eatObj = new ICanEat();


// 用interfaceof关键字判断某个对象是否实现了某个接口
var_dump($man instanceof ICanEat);

function checkEat($obj){
	if($obj instanceof ICanEat){
		$obj->eat('food');
	}else{
		echo "The obj can't eat.\n";
	}
}
checkEat($monkey);










