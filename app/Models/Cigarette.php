<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cigarette extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id','maxtqy'];    


    public function category()
    {
        return $this->belongsTo(App\Category::class,'category_id');
    }
}
