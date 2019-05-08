<?php
class text{
	var $url;
	var $title;  //var（视为公有）类变量声明，public（公有），protected（受保护），private（私有）
	
	function __construct($par1,$par2){
		$this->url = $par1;
		$this->title = $par2;
	}
	function seturl($par){
		$this->url = $par;
	}	
	function geturl(){
		 echo $this->url . PHP_EOL;
	}
	function settitle($par){
		$this->title = $par;
	}
	function gettitle(){
		echo $this->title . PHP_EOL;
	}	   
}
$B = new text('123','345'); //new实例化对象变量
$C = new text('234','456');
$D = new text('aaa','bbb');

$B->geturl(); //->跳转至该名称的内容
$C->geturl();
$D->geturl();

$B->gettitle();
$C->gettitle();
$D->gettitle();

?>
