<?php
function r_register_hook(){
    if(version_compare(get_bloginfo('version'), '4.5', '<')){
        wp_die(__('You must update wordpress to use this plugin.', 'recipe' ));
    }
}

