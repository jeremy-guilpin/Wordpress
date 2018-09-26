/* On rajoute la Sécurité */
remove_action("wp_head", "wp_generator");
add_filter('login_errors',create_function('$a', "return null;"));
remove_action('wp_head', 'wlwmanifest_link');
