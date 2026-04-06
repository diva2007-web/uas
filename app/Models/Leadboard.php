<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadboard extends Model
{
    use HasFactory;

    protected $table = 'leadboard';

    protected $fillable = [
        'foto_utama',
        'cerita_kami',
    ];
}
