<?php

namespace App\Models;
use App\Models\Stockcigarette;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'note'];

    public function stockcigarettes(){
        return $this->hasMany(Stockcigarette::class);
    }

}
