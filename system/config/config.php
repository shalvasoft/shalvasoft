<?php
/**
 * Created by Shalvasoft.
 * Author: Shalva kvaratskhelia
 */
    $config = [
        'DEVELOPMENT_ENVIRONMENT' => true,
        'DEVELOPMENT_VERSION' => '1.0.0',
        'DEVELOPER_NAME' => 'Shalva Kvaratskhelia',
        'DEVELOPER_COMPANY' => 'Shalvasoft',

        'SITE_ADDR' => 'http://localhost/shalvasoft/',
        'SITE_NAME' => 'shalvasoft',
        'SITE_SLOGAN' => 'We are creating web APP`s with any functionality',
        'SITE_OWNER' => 'Shalvasoft',

        'DB_TYPE' => 'mysql',
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'shalvasoft_db',
        'DB_USER' => 'root',
        'DB_PASS' => ''
    ];
    define('DEVELOPER_COMPANY','Shalvasoft');
    define('Libs','system/libraries/');

    define('CONTROLLER','application/controllers/');
    define('VIEW','application/views/');

    define('JS_ADDR', $config['SITE_ADDR'].'public/js/');
    define('CSS_ADDR', $config['SITE_ADDR'].'public/css/');
    define('IMG_ADDR', $config['SITE_ADDR'].'public/image/');
    define('SWF_ADDR', $config['SITE_ADDR'].'public/swf/');
    define('FONT_ADDR', $config['SITE_ADDR'].'public/font/');

