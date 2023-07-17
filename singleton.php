<?php 

trait Singleton {

	protected static $instances = [];
	public function get_instance() {
    	$className = __class__;
        
        if( !array_key_exists($className, self::$instances) ) {
        	self::$instances[$className] = new $className();
        }
        return self::$instances[$className];
        
    }

}


?>