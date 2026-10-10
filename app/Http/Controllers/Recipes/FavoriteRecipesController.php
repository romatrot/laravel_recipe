<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class FavoriteRecipesController extends Controller
{
   public function __invoke()
   {
      $recipes = auth()->user()->favoriteRecipes;

      return view('recipes.favoriteRecipes', compact('recipes'));
   } 
}