<?php

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

////Database offline
define('DB_HOST','localhost');
define('DB_NAME','band');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

define('ITEMS_PER_PAGE',2);

?>