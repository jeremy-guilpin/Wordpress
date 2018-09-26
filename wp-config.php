// Regénérer les clés

// On désactive l'éditeur
define('DISALLOW_FILE_EDIT',true);

// On redirige le wp-content */
define ('WP_CONTENT_FOLDERNAME', 'assets');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME) ;
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_CONTENT_URL', WP_SITEURL . WP_CONTENT_FOLDERNAME);

// On déplace le fichier wp-config avec un include
