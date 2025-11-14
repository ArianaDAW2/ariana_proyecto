<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owners';

    protected $fillable = [
        'id_user',
        'phone',
        'address',
        'identification_number',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_user');
    }
}
