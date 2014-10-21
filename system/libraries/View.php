<?php
/**
 * Created by Shalvasoft.
 * Author: Shalva kvaratskhelia
 */
    class View {
        public function render($name, $noInclude = false) {
            if($noInclude == true){
                require_once VIEW.$name.'.php';
            }else{
                require_once VIEW.'header.php';
                require_once VIEW.$name.'.php';
                require_once VIEW.'footer.php';
            }
        }
    }