<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id_post';
    protected $fillable = [
        'user_id', 'id_supe', 'text',
    ];
}
