<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProfileFiles extends Model
{
    protected $fillable = [
        'profile_id',
        'host_name',
        'file_path',
        'file_name'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::Class, 'profile_id');
    }
}
