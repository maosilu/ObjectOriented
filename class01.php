<?php
date_default_timezone_set('PRC');

class NbaPlayer{
	public  $name = 'Jordan';
	private $height = '198cm';
	private $weight = '98kg';
	private $team = 'Bull';
	private $playerNumber = 23;

	// 构造函数，在被实例化的时候自动调用
	function __construct($name, $height, $weight, $team, $playerNumber){
		echo "In NbaPlayer condtructor\n";
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
$jordan = new Nbaplayer('Jordan11', '198cm', '98kg', 'Bull', 23);
var_dump($jordan);
echo $jordan->name."\n";
$jordan->dribble();
$jordan->pass();

$james = new NbaPlayer('James', '203cm', '120kg', 'heat', 6);
echo $james->name."\n";
//通过把对象变量设置为null，可以触发析构函数的调用
$james = null;
echo "From now on James will not be used.\n";

