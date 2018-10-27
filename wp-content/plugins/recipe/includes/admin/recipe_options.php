<?php
function r_recipe_metaboxes_mb($post){
    $recipe_data = get_post_meta($post->ID, 'recipe_data', true);
    
    if(empty($recipe_data)){
        $recipe_data = array(
            'r_inputIngredients' => '',
            'r_inputTime' => '',
            'r_inputUtensils' => '',   
            'r_inputLevel' => 'Beginner',
            'r_inputMealType' => ''
        );
    }
    ?>
    <div class="form-group">
        <label>Ingredients</label>
        <input type="text" class="form-control" name="r_inputIngredients" value="<?php echo $recipe_data['ingredients']; ?>">
    </div>
    <div class="form-group">
        <label>Cooking Time Required</label>
        <input type="text" class="form-control" name="r_inputTime" value="<?php echo $recipe_data['time']; ?>">
    </div>
    <div class="form-group">
        <label>Utensils</label>
        <input type="text" class="form-control" name="r_inputUtensils" value="<?php echo $recipe_data['utensils']; ?>">
    </div>
    <div class="form-group">
        <label>Cooking Experience</label>
        <select class="form-control" name="r_inputLevel">
            <option value="Beginner" <?php echo $recipe_data['level'] == "Intermediate" ? "Selected" :""; ?>>Beginner</option>
            <option value="Intermediate" <?php echo $recipe_data['level'] == "Intermediate" ? "Selected" :""; ?>>Intermediate</option>
            <option value="Expert" <?php echo $recipe_data['level'] == "Expert" ? "Selected" :""; ?>>Expert</option>
        </select>
    </div>
    <div class="form-group">
        <label>Meal Type</label>
        <input type="text" class="form-control" name="r_inputMealType" value="<?php echo $recipe_data['meal_type']; ?>">
    </div>
    <?php
}
