<?php

namespace ahmed\core;

use ahmed\core\DB;

class controller extends DB{

    public function view($path){
        require VIEW.$path.".php";
    }

}