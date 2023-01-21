<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apirecord extends Model
{
    use HasFactory;



    protected $fillable = [
        'api_id',
        'module',
        'submodule',
        'hosting',
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


    public function api(){
        return $this->belongsTo(Api::class);
    }




    protected $casts = [
        'header'=> 'array',
        'parameter'=> 'array',
        'success'=> 'array',
        'error'=> 'array',
    ];

}
