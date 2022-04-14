<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    public function build() {
        return $this->hasMany(Floor::class, 'building_id', 'floor_id');
        }
        protected $with = ['buildings'];
        public function buildings()
        {
            return $this->belongsTo(building::class, 'building_id', 'building_id');
        }
        public $timestamps = false;

}
