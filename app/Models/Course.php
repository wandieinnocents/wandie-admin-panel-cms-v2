<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'requirements_document_one',
        'requirements_document_two',
        'requirements_document_three'
    
    ];
}
