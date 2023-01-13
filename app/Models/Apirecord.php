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
        'hfield',
        'htype',
        'hdescription',
        'pfield',
        'ptype',
        'pdescription',
        'sfield',
        'stype',
        'sdescription',
        'efield',
        'etype',
        'edescription'


    ];


    public function api(){
        return $this->belongsTo(Api::class);
    }




    protected $casts = [
        'hfield'=> 'array',
        'htype'=> 'array',
        'hdescription'=> 'array',
        'pfield'=> 'array',
        'ptype'=> 'array',
        'pdescription'=> 'array',
        'sfield'=> 'array',
        'stype'=> 'array',
        'sdescription'=> 'array',
        'efield'=> 'array',
        'etype'=> 'array',
        'edescription'=> 'array'
    ];


}
