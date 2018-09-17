<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Ovveride default timestamps
     */
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_updated';

    protected $fillable = [
        'project_id',
        'remote_referral_id',
        'full_name',
        'alias',
        'email',
        'city',
        'state_id',
        'zip',
        'cell_phone',

    ];

    public function profile_files()
    {
        return $this->hasMany(ProfileFiles::class);
    }

    public function profile_phones()
    {
        return $this->hasMany(ProfilePhones::class);
    }
}
