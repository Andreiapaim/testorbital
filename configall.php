<?php

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://www.mestrescoruja.com.br/');
define( 'DB_HOST', 'mysql.mestrescoruja.com.br' );
define( 'DB_USERNAME', 'mestrescoruja');
define( 'DB_PASSWORD', '0a8f9aGs983T098df2Fds');
define( 'DB_NAME', 'mestrescoruja');

spl_autoload_register(function($class) {
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
);