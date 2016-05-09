<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $primaryKey = '_id';

    public function weapon()
    {
        return $this->hasOne(Weapon::class);
    }

}
