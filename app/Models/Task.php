<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['name', 'title', 'content','project_id','flag'];

    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function project(){
        return $this->belongsTo('App\Models\Project');
    }
}
