<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $primaryKey = 'FavoriteID';
    protected $fillable = ['UserID', 'UniversityID'];


    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'UniversityID', 'UniversityID');
    }
}
