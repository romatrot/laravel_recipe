<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class DestroyRecipeController extends Controller
{
   public function __invoke(Recipe $recipe)
   {
      $this->authorize('delete', $recipe);

      $recipe->delete();

      return redirect()->route('myRecipes');
   }
}