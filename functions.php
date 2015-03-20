<?php
function get_author_role()
{
    global $authordata;

    $author_roles = $authordata->roles;
    $author_role = array_shift($author_roles);

    return $author_role;
}

?>