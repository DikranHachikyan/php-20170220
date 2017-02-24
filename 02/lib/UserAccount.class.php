<?php

class UserAccount{
	//данни на класа
	protected $userName='john';
    protected $fsname='John';
    protected $lsname='Doe';
    protected $level='normal';
    protected $email;
    private $password;
    public $loginTime;

    public function __construct($data = array()){
    	foreach ($data as $name => $value) {
    		if( property_exists($this,$name)){
    			$this->$name = $value;
    		}
    	}
    }


    //методи
    //public function showInfo(){
    function showInfo(){
    	$output = 'User: ' . $this->userName;

    	if( $this->fsname){
    		$output .= '<br>First Name:'.$this->fsname;
    	}

    	if( $this->lsname){
    		$output .= '<br>Last Name:'.$this->lsname;
    	}
    	return $output;
    }

    public function setPassword( $password){
    	$this->password = $password;
    }

    public function getLoginTime(){
    	return $this->loginTime;
    }

    public function __set($name, $value){
    	echo '<p>Magic Set:'.$name.'</p>';
    	if( $name == 'password') return ;

    	if( property_exists($this,$name)){
    		$this->$name = $value;
    		return;
    	}

    	trigger_error('Undefined Property __set:' . $name);

    }

    public function __get($name){
    	echo '<p>Magic Get:'.$name.'</p>';
    	if( $name == 'password'){
    		trigger_error('Password id write only property:');
    		return NULL;
    	}

    	if( property_exists($this, $name)){
    		return $this->$name;
    	}
    	trigger_error('Undefined Property __get:'.$name);
    	return NULL;
    }
}