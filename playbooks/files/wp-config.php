<?php
define( 'DB_NAME', 'practicum' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'rootpassword' );
define( 'DB_HOST', '192.168.0.16' );

define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

$table_prefix = 'wp_';  // Префикс таблиц

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

// Пути к файлам
define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once( ABSPATH . 'wp-settings.php' );
