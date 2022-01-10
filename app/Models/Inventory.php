<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name','detail'
    ];

    public function archive()
    {
        return $this->hasOne('App\Models\Archive');
    }

    public function employee(){
        // return $this->belongsToMany('App\Models\Employee');
        return $this->belongsToMany('App\Models\Employee')
        ->withPivot('description', 'created_at');
    }
}
