<?php
function r_create_metaboxes(){
    add_meta_box( 'r_recipe_metaboxes_mb', 
            __('Recipe Options','recipe'), 
            'r_recipe_metaboxes_mb', 
            'recipe', 
            'normal', 
            'high');
}
