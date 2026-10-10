<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Recipes\GetAllRecipesController;
use App\Http\Controllers\Recipes\UserRecipesController;
use App\Http\Controllers\Recipes\FavoriteRecipesController;
use App\Http\Controllers\Recipes\CreateRecipeFormController;
use App\Http\Controllers\Recipes\CreateRecipeController;
use App\Http\Controllers\Recipes\UpdateRecipeFormController;
use App\Http\Controllers\Recipes\UpdateRecipeController;
use App\Http\Controllers\Recipes\DestroyRecipeController;
use App\Http\Controllers\Recipes\AddFavoriteRecipesController;
use App\Http\Controllers\Recipes\DestroyFavoriteRecipesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/recipes', GetAllRecipesController::class )->name('recipes');

Route::middleware('auth')->group(function () {
    Route::get('/myRecipes', UserRecipesController::class)->name('myRecipes');

    Route::get('/favoriteRecipes', FavoriteRecipesController::class)->name('favoriteRecipes');
    Route::post('/favoriteRecipe/{recipe}', AddFavoriteRecipesController::class)->name('addFavoriteRecipe');
    Route::delete('/favoriteRecipe/{recipe}', DestroyFavoriteRecipesController::class)->name('deleteFavoriteRecipe');
    
    Route::get('/recipe/create', CreateRecipeFormController::class)->name('createRecipe');
    Route::post('/recipe', CreateRecipeController::class)->name('recipeStore');
    Route::get('/recipe/{recipe}/edit', UpdateRecipeFormController::class)->name('recipeEdit');
    Route::patch('/recipe/{recipe}', UpdateRecipeController::class)->name('recipeUpdate');
    Route::delete('/recipe/{recipe}', DestroyRecipeController::class)->name('recipeDelete');
     
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');  
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
