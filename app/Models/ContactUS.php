<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    protected $table = 'contact_us';  // Specify the exact table name

    protected $primaryKey = 'ContactID';

    protected $fillable = [
        'MajorID',
        'UniversityID',
        'Description',
        'UserID',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'MajorID', 'MajorID');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'UniversityID', 'UniversityID');
    }
}
