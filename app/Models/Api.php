<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'submodule_id',
        'hosting_id',
        'name',
        'endpoint',
        'method',
        'responseformat',
        'apiresponse',
        'apipurpose',
        'casevalidation',
        'successresponse',
        'errorresponse',
        'failresponse',
        'developedby',
        'optional',
        'updatedby',   
         'header',
         'parameter',
         'success', 
         'error'
       


    ];

    protected $casts = [
        'header'=> 'array',
        'parameter'=> 'array',
        'success'=> 'array',
        'error'=> 'array',
    ];


    public function apirecords(){
        return $this->hasMany(Apirecord::class)->orderByDesc('id');
    }


    public function module(){
        return $this->belongsTo(Module::class);
    }


    public function submodule(){
        return $this->belongsTo(Submodule::class);
    }


    public function hosting(){
        return $this->belongsTo(Hosting::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class)->orderByDesc('id');
    }



}
