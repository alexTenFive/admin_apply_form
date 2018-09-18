<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'state'
    ];

}
