<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyCount extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'note' , 'empl_name'];

    public function cigarettescount(){
        return $this->hasMany(Stockcigarette::class);
    }
}
