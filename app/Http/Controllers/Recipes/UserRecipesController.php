<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class UserRecipesController extends Controller
{
   public function __invoke()
   {
      $recipes = Recipe::where('user_id', auth()->id())->get();

      return view('recipes.myRecipes', compact('recipes'));
   } 
}