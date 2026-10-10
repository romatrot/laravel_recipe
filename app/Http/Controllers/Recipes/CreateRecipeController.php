<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Http\Requests\Recipe\CreateRequest;

class CreateRecipeController extends Controller
{
   public function __invoke(CreateRequest $request)
   {
   
      $data = $request->validated();  

      $data['user_id'] = auth()->id();

      Recipe::create($data);

      return  redirect()->route('myRecipes');
   
   } 
}