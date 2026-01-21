<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function address() {
        return $this->hasOne(BuildingAddress::class, 'building_id');
    }
}