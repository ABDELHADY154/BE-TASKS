<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['id','name','desc'];
   
    public function subGroups()
    {
        return $this->hasMany(SubGroup::class);
    }
}
