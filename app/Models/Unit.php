<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    
    protected $table = 'unites';

    protected $casts = [
        'unit_pictures' => 'array'
    ];
    protected $with = ['buildings'];

    public function buildings()
    {
        return $this->belongsTo(building::class, 'building_id', 'building_id');
    }
  

    public function types()
    {
        return $this->belongsTo(type::class, 'type_id', 'type_id');
    }

}
