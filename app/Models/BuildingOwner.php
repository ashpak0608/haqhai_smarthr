<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuildingOwner extends Model
{
    protected $table = 'building_owners';
    protected $guarded = ['id'];

    public function address() {
        return $this->hasOne(BuildingAddress::class, 'building_id');
    }
}