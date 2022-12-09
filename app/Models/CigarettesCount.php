<?php

namespace App\Models;
use App\Models\Stock;
use App\Models\Cigarette;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CigarettesCount extends Model
{
    use HasFactory;

    protected $fillable = ['dailycount_id', 'cigarette_id','qty'];

    public function cigarette()
    {
        return $this->belongsTo(Cigarette::class,'cigarette_id');
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class,'stock_id');
    }
}
