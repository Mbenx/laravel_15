<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','alamat','phone','email','position_id'];

    public function position(){
        return $this->belongsTo('App\Models\Position');
    }

    public function inventory(){
        // return $this->belongsToMany('App\Models\Inventory');
        return $this->belongsToMany('App\Models\Inventory')
        ->withPivot('description', 'created_at');
    }

}
