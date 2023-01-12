<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginpag extends Model
{
    use HasFactory;

     protected $table = 'loginpag';

    protected $primaryKey = 'id';

    protected $fillable = [
            'email',
            'password',
            
    ];
}
