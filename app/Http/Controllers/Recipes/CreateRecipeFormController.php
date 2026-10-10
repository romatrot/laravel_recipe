<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;

class CreateRecipeFormController extends Controller
{
   public function __invoke()
   {
      return view('recipes.recipeForm');
   } 
}