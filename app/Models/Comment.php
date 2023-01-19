<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'api_id'
    ];

    public function comments(){
        return $this->hasMany(Comment::class)->orderByDesc('id');
    }
}
