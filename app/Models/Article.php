<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable =['title','content','publish_time'];
    protected $dates=['publish_time'];

    public function setPublishTimeAttribute($date){
        $this->attributes['publish_time'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function scopePublished($query){
        $query->where('publish_time','<=',Carbon::now());
    }
}
