<?php
	use Phalcon\Autoload\Loader;

    $loader = new Loader();

	//register common
	$loader->setDirectories([
        APP_PATH . '/controllers/',
        APP_PATH . '/models/',
        APP_PATH . '/repositories/', // 這是你新加的
    ])->register();
    
	return $loader;