<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    protected $fillable = [
        'name', 'description'
    ];

    public function addUser($userId)
    {
        $this->users()->attach($userId);
    }
    public function deleteUser($userId)
    {
        $this->users()->detach($userId);
    }
    public function getAdmins()
    {
        $admins = $this->users(); // TODO ()->where('admin','==','TRUE');
        return $admins;
    }
}
