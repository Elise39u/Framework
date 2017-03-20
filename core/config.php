<?php

define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1:8889');
define('DB_NAME', 'mcvavontuur');
define('DB_USER', 'MCVAvontuur');
define('DB_PASS', 'test');
define('DB_CHARSET', 'utf8');

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);