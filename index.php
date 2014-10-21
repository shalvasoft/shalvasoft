<?php
/**
 * Created by Shalvasoft.
 * Author: Shalva kvaratskhelia
 */
    require_once 'system/config/config.php';
    function __autoload($classname){
        require_once Libs.$classname.'.php';
    }

    $app = new bootstrap();