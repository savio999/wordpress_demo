<?php
function r_admin_enqueue(){
    global $typenow;
       
    if($typenow != 'recipe'){
        return;
    }
    
    wp_register_style('ju_bootstrap', plugins_url('/assets/assets-dev/styles/bootstrap.css',RECIPE_PLUGIN_URL));
    wp_enqueue_style('ju_bootstrap');
}

add_action('save_post_recipe','on_save_recipes',10,3);
