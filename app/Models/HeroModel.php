<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroModel extends Model
{
    protected $table = 'heroproperties';
    protected $fillable = ['keyLine', 'title', 'short_title', 'message', 'img'];
}
