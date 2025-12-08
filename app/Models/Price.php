<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';


    protected $fillable = [
        'id_discount',
        'id_room',
        'total_extra',
        'total_pet',
        'total_days',
        'total_price',
        'created_at',
        'updated_at',
    ];


}
