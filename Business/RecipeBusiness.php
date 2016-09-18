<?php

include_once '../Data/RecipeData.php';

/**
 * Description of RecipesBusiness
 *
 * @author gollo
 */
class RecipeBusiness {
    
    /* atributos */
    private $recipeData;
    
    public function RecipeBusiness(){
        $this->recipeData = new RecipeData();
    }
    
    public function getRecipesByProduct($idProduct){
        $result = $this->recipeData->getRecipesByProduct($idProduct);
        return $result;
    }
    
    
}
