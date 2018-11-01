<?php
function r_register_hook(){
    if(version_compare(get_bloginfo('version'), '4.5', '<')){
        wp_die(__('You must update wordpress to use this plugin.', 'recipe' ));
    }
    
    global $wpdb;
    
    $sql_query = "CREATE TABLE `".$wpdb->prefix."recipe_ratings` ( `ID` BIGINT(20) NULL AUTO_INCREMENT , `recipe_id` BIGINT(20) NOT NULL , `rating` FLOAT(3,2) NOT NULL , `user_ip` VARCHAR(32) NOT NULL , PRIMARY KEY (`ID`)";

    require_once ABSPATH . '/wp-admin/';
}

