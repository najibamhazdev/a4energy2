<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ord'];



    public function cigarettes() {
        return $this->hasMany(App\Cigarette::class);
     }
}
