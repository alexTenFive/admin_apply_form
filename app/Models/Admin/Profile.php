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

    const PROFILE_STATUSES = [
        1 => 'New',
        2 => 'Voided',
        3 => 'Transfered'
    ];

    const PROFILE_STATUSES_KEYS = [
        'New' => 1,
        'Voided' => 2,
        'Transfered' => 3
    ];

    protected $fillable = [
        'form_id',
        'project_id',
        'remote_referral_id',
        'full_name',
        'alias',
        'email',
        'address',
        'city',
        'state_id',
        'zip',
        'cell_phone',
        'photo_url'

    ];

    public function profile_files()
    {
        return $this->hasMany(ProfileFiles::class);
    }

    public function profile_phones()
    {
        return $this->hasMany(ProfilePhones::class);
    }

    public function getProfileStatus()
    {
        return self::PROFILE_STATUSES[$this->status_id];
    }

    public function getProfileStatuses()
    {
        return self::PROFILE_STATUSES;
    }

    public function getNewProfile()
    {
        return $this->status_id == self::PROFILE_STATUSES_KEYS['New'];
    }

    public function getVoidedProfile()
    {
        return $this->status_id == self::PROFILE_STATUSES_KEYS['Voided'];
    }

    public function getTransferedProfile()
    {
        return $this->status_id == self::PROFILE_STATUSES_KEYS['Transfered'];
    }

   /* protected static function boot() {
        parent::boot();
        static::deleting(function($profile) {
            // $book->comments()->delete();
            $profile->profile_phones()->delete();
            $profile->profile_files()->delete();
        });
    }*/
}
