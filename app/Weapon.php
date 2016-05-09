<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $primaryKey = '_id';

    public function item()
    {
        return $this->belongsTo(Item::class, "_id");
    }

}
