<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $primaryKey = 'RatingID';
    protected $fillable = ['Score', 'UserID', 'UniversityID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'UniversityID', 'UniversityID');
    }
}
