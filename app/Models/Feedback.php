<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'FeedbackID';
    protected $fillable = ['Message', 'UserID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
}
