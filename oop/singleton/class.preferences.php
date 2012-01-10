<?php
/*
PREFERENCES CLASS

This class is a demonstration to be used as an alternative to using globals.
The class employs a singleton pattern, however makes its instantiation private 
by having a private constructor, and thus it can only be instantiated by itself.
*/

class Preferences {
	private $props = array();
	private static $instance;
	
	private function __construct() { }
	
	public static function getInstance() {
		if(empty(self::$instance)) {
			self::$instance = new Preferences();  //this class instantiates itself
		}
		
		return self::$instance;  //return the new preferences class that has been created
	}
	
	public function setProperty($key,$val) {
		$this->props[$key] = $val;
	}
	
	public function getProperty($key) {
		return $this->props[$key];
	}
}
?>