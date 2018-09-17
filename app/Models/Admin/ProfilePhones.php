<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProfilePhones extends Model
{
    /**
     * Override default timestamp names
     */
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_updated';

    protected $fillable = [
        'profile_id',
        'phone',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}
