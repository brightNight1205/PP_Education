<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $primaryKey = 'MajorID';

    protected $fillable = ['Name', 'UniversityID'];

    public function university()
    {
        return $this->belongsTo(University::class, 'UniversityID', 'UniversityID');
    }

    public function contactUs()
    {
        return $this->hasMany(ContactUS::class, 'MajorID', 'MajorID');
    }
}
