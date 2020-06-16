<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubGroup extends Model
{
    protected $fillable = ['id','name','desc','group_id'];
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
