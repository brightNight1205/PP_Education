<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $primaryKey = 'UniversityID';
    protected $fillable = ['UniversityID', 'Name', 'Image'];
    public function majors()
    {
        return $this->hasMany(Major::class, 'UniversityID', 'UniversityID');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'UniversityID', 'UniversityID');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'UniversityID', 'UniversityID');
    }

    public function contactUs()
    {
        return $this->hasMany(ContactUS::class, 'UniversityID', 'UniversityID');
    }
}

