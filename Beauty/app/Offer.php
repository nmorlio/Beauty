<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title', 'description', 'type', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
}
