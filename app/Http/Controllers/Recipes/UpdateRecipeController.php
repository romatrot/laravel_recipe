<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Http\Requests\Recipe\UpdateRequest;

class UpdateRecipeController extends Controller
{
   public function __invoke(UpdateRequest $request, Recipe $recipe)
   {
      $this->authorize('update', $recipe);

      $data = $request->validated();  

      $recipe->update($data);

      return redirect()->route('myRecipes');
   }
}