<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'amount'];
    public function getCurrentPriceAttribute()
    {
        return 100;
    }

    public function getAmountAttribute()
    {
        return 10;
    }
}
