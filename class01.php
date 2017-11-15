<?php
date_default_timezone_set('PRC');

class Human{
	public $name;
	public $height;
	public $weight;

	public function eat($food){
		echo $this->name."'s eating ".$food."\n";
	}
}

class Animal{

}

// PHP是单继承的，extends后面只能有一个类
class NbaPlayer extends Human{
	private $team = 'Bull';
	private $playerNumber = 23;

	// 构造函数，在被实例化的时候自动调用
	function __construct($name, $height, $weight, $team, $playerNumber){
		echo "In NbaPlayer condtructor\n";
		// 父类中的属性，可以通过$this来访问
		$this->name = $name;
		$this->height = $height;
		$this->weight = $weight;

		$this->team = $team;
		$this->playerNumber = $playerNumber;

	}

	// 析构函数，在程序执行结束的时候会自动调用
	// 析构函数通常被用于清理程序使用的资源。比如，程序使用了打印机，那么可以在析构函数里面释放打印机资源。
	function __destruct(){
		echo "Destroying ".$this->name."\n";
	}

	//定义方法
	public function run(){
		echo 'Running\n';
	}

	public function jump(){
		echo 'Jumping\n';
	}

	public function dribble(){
		echo "Dribbling\n";
	} 

	public function shoot(){
		echo 'Shooting\n';
	}

	public function dunk(){
		echo 'Dunking\n';
	}

	public function pass(){
		echo "Passing\n";
	}
}

//类到对象的实例话
$jordan = new Nbaplayer('Jordan', '198cm', '98kg', 'Bull', 23);
echo $jordan->name."\n";
echo $jordan->eat('apple');

