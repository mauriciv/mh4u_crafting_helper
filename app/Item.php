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

    public function materials()
    {
        return $this->belongsToMany('App\Item',
                                    'components',
                                    'created_item_id',
                                    'component_item_id'
                                    )->withPivot('quantity', 'type');
    }

}
