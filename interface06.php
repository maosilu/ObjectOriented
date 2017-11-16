<?php
/*
1.interface关键字用语定义接口
2.接口中定义的所有方法必须公有
3.类可以实现多个接口，用逗号来分隔多个接口的名称，实现多个接口时，接口中的方法不能有重名
4.类是单继承的，接口可以多继承
5.类要实现接口，必须使用和接口中所定义的方法完全一致的方式，包含参数的写法都要一模一样，否则会导致致命错误
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

//相同的一行代码，对于传入不同的实现接口的对象的时候，表现是不同的，这就是多态
checkEat($monkey);
checkEat($man);

/*
以下测试接口是否能够继承接口
*/
/*
可以用extends让接口继承接口
*/
interface IcanPee extends ICanEat{
	public function pee();
}
// 当类实现子接口时，父接口定义的方法也需要在这个类里面具体实现
class Human1 implements ICanPee{
	public function pee(){
		echo 'I can pee'."\n";
	}
	public function eat($food){

	}
}









