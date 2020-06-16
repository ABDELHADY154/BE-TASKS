<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'name', 'desc', 'sub_group_id'];
    public function SubGroup()
    {
        return $this->belongsTo(SubGroup::class);
    }
}
