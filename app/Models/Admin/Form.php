<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    const FORM_STATUS = [
        0 => 'Inactive',
        1 => 'Active'
    ];

    protected $fillable = [
        'title',
        'header_html',
        'project_id',
        'referral_id',
        'pdf_url',
        'thumbnail_url'
    ];

    public function getFormStatus()
    {
        return self::FORM_STATUS[$this->status];
    }

    public function getFormStatuses()
    {
        return self::FORM_STATUS;
    }
}
