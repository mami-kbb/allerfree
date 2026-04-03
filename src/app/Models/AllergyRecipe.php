<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllergyRecipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'allergy_id'
    ];

    public function allergy()
    {
        return $this->belongsTo(Allergy::class);
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
