<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'description'];

    /**
    * Get the category that owns the project.
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 50, '...');
    }

    public function getMediumDescriptionAttribute()
    {
        return Str::limit($this->description, 400, '...');
    }
}
