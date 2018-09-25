<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    const FORM_STATUSES = [
        0 => 'Inactive',
        1 => 'Active'
    ];

    const FORM_STATUSES_KEYS = [
        'Inactive' => 0,
        'Active' => 1
    ];

    protected $fillable = [
        'title',
        'header_html',
        'project_id',
        'referral_id',
        'pdf_url',
        'thumbnail_url',
        'form_unique_part'
    ];

    public function getFormStatus()
    {
        return self::FORM_STATUSES[$this->status];
    }

    public function getFormStatuses()
    {
        return self::FORM_STATUSES;
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

}
