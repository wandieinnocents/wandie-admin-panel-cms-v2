<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $fillables = [
        'project_category_name',
        'project_category_description'

    ];
    // relationship
    public function project_r(){
        return $this->hasMany(Project::class);
    }

    
}
