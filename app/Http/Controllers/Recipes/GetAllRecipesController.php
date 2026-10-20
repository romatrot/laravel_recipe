<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class GetAllRecipesController extends Controller
{
   public function __invoke()
   {
      $recipes = Recipe::paginate(10);

      return view('recipes.showRecipes', compact('recipes'));
   } 
}