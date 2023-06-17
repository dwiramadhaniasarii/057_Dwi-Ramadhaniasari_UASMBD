<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public $table = "Categories";
    use HasFactory;
    Protected $fillable = [
        'CategoryID',
        'CategoryName',
        'Description',
        'Picture',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'CategoryID', 'CategoryID');
    }
}
