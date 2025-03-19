<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blog';

    const CREATED_AT = 'created_at';

    protected $fillable = [
        'id',
        'title',
        'content',
    ];

    public $timestamps = true;
}
