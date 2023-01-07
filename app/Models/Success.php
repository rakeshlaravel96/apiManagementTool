<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Success extends Model
{
    use HasFactory;


    protected $fillable = [
        'api_id',
        'field',
        'type',
        'description'
    ];

    public function api(){
        return $this->belongsTo(Api::class);
    }
}
