<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'instruction',
        'user_id',
    ];

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class);
    }
}
