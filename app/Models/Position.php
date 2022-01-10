<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','code','department_id'];

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

    public function employee(){
        return $this->hasMany('App\Models\Employee');
    }

}
