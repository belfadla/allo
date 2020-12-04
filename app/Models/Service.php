<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'type',
        'prix',
        'lieu',
    ];
    public function details()
    {
        return $this->hasMany('App\Models\Details','service_id','id');
    }
}
