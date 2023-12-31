<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copyright extends Model
{
    protected $table = 'copyrights';
    protected $fillable = [
        'name',
        'note',
    ];
}
