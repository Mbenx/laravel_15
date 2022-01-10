<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name','detail','inventory_id'
    ];

    public function inventory()
    {
        return $this->belongsTo('App\Models\Inventory');
    }
}
