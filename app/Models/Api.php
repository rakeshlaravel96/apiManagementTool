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
        'updatedby'

    ];

    public function apirecords(){
        return $this->hasMany(Apirecord::class);
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





    public function headers(){
        return $this->hasMany(Header::class);
    }


    public function errors(){
        return $this->hasMany(Error::class);
    }
    public function successs(){
        return $this->hasMany(Success::class);
    }
    public function parameters(){
        return $this->hasMany(Parameter::class);
    }

}
