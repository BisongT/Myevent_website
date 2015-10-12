<?php 
define('WP_HOME','http://localhost:8888/Myevent_website');
define('WP_SITEURL','http://localhost:8888/Myevent_website');
// Global DB config
define('WP_HOME','http://localhost/Myevent_website');
define('WP_SITEURL','http://localhost/Myevent_website');

if (!defined('DB_NAME')) {
	define('DB_NAME', 'bisongt');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'bisongt');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'Events@site');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}


 ?>