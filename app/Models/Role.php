<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mview',
        'mviewAll',
        'mcreate',
        'medit',
        'mdelete',
        'hview',
        'hviewAll',
        'hcreate',
        'hedit',
        'hdelete',
        'aview',
        'aviewAll',
        'acreate',
        'aedit',
        'adelete',

        ];


 

    public function users()
    {
        return $this->hasMany(User::class);
    }



}
