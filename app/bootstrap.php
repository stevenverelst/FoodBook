<?php
namespace app;

    require_once __DIR__ . '/../vendor/autoload.php';
    use app\library\{ Util, Core }; 
    use app\config\Config;
    
    
    Util::trace("new core initialized in Bootstrap.");
    $core=new Core();
  
?>