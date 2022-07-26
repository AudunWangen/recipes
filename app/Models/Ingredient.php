<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'ingredients';

    protected $primaryKey = 'id';

    protected $fillable = ['name'];

    public function recipeIngredient() {
        return $this->hasMany(RecipeIngredient::class);
    }

    public function recipe() {
        return $this->belongsToMany(Recipe::class, 'recipe_ingredients');
    }
}
