<?php
//Load config
require_once ("config/config.php");


//Load Libraries
require_once ("libraries/Core.php");
require_once ("libraries/Controller.php");
require_once ("libraries/Database.php");

//Auroload Core Libraries

spl_autoload_register(function($ClassName){
    require_once ('libraries/'.$ClassName.'php');
})

?>
