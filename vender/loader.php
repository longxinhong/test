<?php 
namespace vender;
class ClassAutoloader {
    public static function autoload($class) {
        
    }
    public static function register() {
        spl_autoload_register('self::autoload', true, true);
    }
}

?>