<?php

function change_role_name() {
    global $wp_roles;

    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    //You can list all currently available roles like this...
    //$roles = $wp_roles->get_names();
    //print_r($roles);

    //You can replace "administrator" with any other role "editor", "author", "contributor" or "subscriber"...
    $wp_roles->roles['administrator']['name'] = 'Admin';
    $wp_roles->role_names['administrator'] = 'Admin';
    $wp_roles->roles['subscriber']['name'] = 'Member';
    $wp_roles->role_names['subscriber'] = 'Member';           
}
add_action('init', 'change_role_name');

?>