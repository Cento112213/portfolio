<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'title',
        'employment_type',
        'company_name',
        'location',
        'location_type',
        'start_date',
        'end_date',
        'description'
    ];
}
