<?php

//llamando a config
require_once 'config/config.php';

//llamando a la url helperl
require_once 'helper/url_helper.php';

//llamando a libs
spl_autoload_register(function($_files){
    require_once 'libs/'.$_files . '.php';
});