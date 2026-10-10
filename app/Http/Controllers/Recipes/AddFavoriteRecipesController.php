<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class AddFavoriteRecipesController extends Controller
{
   public function __invoke(Recipe $recipe)
   {
      auth()->user()->favoriteRecipes()->syncWithoutDetaching($recipe->id);

      return redirect()->back();
   } 
}