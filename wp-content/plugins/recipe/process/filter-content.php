<?php
function r_filter_recipe_content($content){
    if( ! (is_singular('recipe'))){
        return $content;
    }
    
    global $post;
    $recipe_template = file_get_contents('recipe-template.php',true);
    $recipe_data = get_post_meta($post->ID,'recipe_data',true);
    $recipe_template = str_replace('INGREDIENTS_PH', $recipe_data['ingredients'], $recipe_template);
    $recipe_template = str_replace('COOKING_TIME_PH', $recipe_data['time'], $recipe_template);
    $recipe_template = str_replace('UTENSILS_PH', $recipe_data['utensils'], $recipe_template);
    $recipe_template = str_replace('LEVEL_PH', $recipe_data['level'], $recipe_template);
    $recipe_template = str_replace('TYPE_PH', $recipe_data['meal_type'], $recipe_template);
    $recipe_template = str_replace('INGREDIENTS_I18N', 'Ingredients', $recipe_template);
    $recipe_template = str_replace('COOKING_TIME_I18N', 'Cooking time', $recipe_template);
    $recipe_template = str_replace('UTENSILS_I18N', 'Utensils', $recipe_template);
    $recipe_template = str_replace('LEVEL_I18N','Level', $recipe_template);
    $recipe_template = str_replace('TYPE_I18N', 'Meal Type', $recipe_template);    
    $recipe_template = str_replace('RATE_I18N', 'Rating', $recipe_template);      
    return  $recipe_template . $content;
}
