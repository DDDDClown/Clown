<meta charset="utf-8">
<?php
class Clerk{
 public $name;
 protected $job;
 private $salary;
 function __construct($name,$job,$salary){
 	$this->name=$name;
 	$this->job=$job;
 	$this->salary=$salary;
 } 
public function getjob(){
 	return $this->job;
 } 
public function getsalary(){
	return $this->salary;
}   	
}               
$Clerk=new Clerk('clown','php',10000);
echo '<br>'.$Clerk->name;
echo '<br>'.$Clerk->getjob();
echo '<br>'.$Clerk->getsalary();
echo '<hr>';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
?> 
<?php
class cat{
	public $name;
	protected $food;
	private $sex;
	public function __construct($name,$food,$sex){
		$this->name=$name;
		$this->food=$food;
    $this->sex=$sex;	
    echo '<br> 这只'.$this->name.'是只喜欢吃'.$this->food.'的'.$this->sex.'猫';
	}
	public function miao(){
		echo '<br> 这只'.$this->name.'是只喜欢吃'.$this->food.'的'.$this->sex.'猫';
	}
	function __get($ro_nood){
		return $this->$ro_nood;
	}
	function __set($ro_se,$val){
   return $this->$ro_se=$val;
	}
}
$cat1=new cat('橘猫','小鱼干','公');
echo '<br> 猫喜欢吃'.$cat1->food;
$cat1->sex='母';
echo '<br> 这是只'.$cat1->sex.'猫';

$cat1->miao();

?>