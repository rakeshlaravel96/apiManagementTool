<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'api',
        'module',
        'hosting'
    ];


    protected $casts = [
        'api'=> 'array',
        'module'=> 'array',
        'hosting'=> 'array'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }



}
