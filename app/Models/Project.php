<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable =['name','title','content','status'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
