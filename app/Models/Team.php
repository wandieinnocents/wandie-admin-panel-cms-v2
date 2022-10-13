<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillables = [
        'team_name',
        'team_role',
        'team_photo',
        'team_category',
        'team_description',
    ];
}
