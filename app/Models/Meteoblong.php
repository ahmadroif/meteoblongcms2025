<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meteoblong extends Model
{
    use HasFactory;

    protected $fillable = ['customer', 'order_date', 'product', 'quantity', 'total_price'];

    public static function getAll()
    {
        return meteoblong::all();
    }

    public static function find($id)
    {
        return meteoblong::where('id', $id)->first();
    }
}
