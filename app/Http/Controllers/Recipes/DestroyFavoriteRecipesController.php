<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class DestroyFavoriteRecipesController extends Controller
{
   public function __invoke(Recipe $recipe)
   {
      auth()->user()->favoriteRecipes()->detach($recipe->id);

      return redirect()->route('favoriteRecipes');
   } 
}