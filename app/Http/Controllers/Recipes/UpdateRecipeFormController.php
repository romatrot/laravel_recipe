<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class UpdateRecipeFormController extends Controller
{
   public function __invoke(Recipe $recipe)
   {
      $this->authorize('update', $recipe);

      return view('recipes.updateRecipeForm', compact('recipe'));
   }
}