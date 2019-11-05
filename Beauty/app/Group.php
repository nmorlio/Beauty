<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('admin');
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
        $admins = $this->users()->where('admin',true);
        return $admins;
    }

    public function addAdmin($userId)
    {
        $this->addUser($userId);
        $this->setAdmin($userId);
    }

    public function setAdmin($userId)
    {
        $relation = $this->users()->where('user_id',$userId)->first()->pivot;
        $relation->admin = true;
        $relation->save();
    }

}
