<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuisinteraktif extends Model
{
    use HasFactory;

    protected $table = 'kuis_interaktif';

    protected $fillable = [
        'foto_utama',
        'cerita_kami',
    ];
}
