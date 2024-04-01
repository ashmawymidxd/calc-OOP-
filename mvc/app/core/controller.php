<?php

namespace ahmed\core;

use ahmed\core\DB;

class controller extends DB{

    public function view($path){
        if(file_exists(VIEW.$path.".php")){
            require VIEW.$path.".php";
        }else{
            if(file_exists(VIEW."Website\\404.php")){
                require VIEW."Website\\404.php";
            }
            else{
                echo 'you must provide this dir '.VIEW."Website\\404.php";
            }
        }
    }

}