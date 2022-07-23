<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'preptime', 'cooktime', 'servings', 'directions'];

    public function recipeIngredient() {
        return $this->hasMany(RecipeIngredient::class);
    }

    public function ingredient() {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients');
    }
}
