<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class database extends Model
{ protected $fillable =[
    'Title',
    'description',
    'publisher',
    'updete_publisher',
'user_id',
    ];
    use HasFactory;
public function tag()
{
    return$this->belongsToMany(tag::class);
}
    public function user()
    {
//        return $this->hasMany('App\Models\database');
        return $this->belongsTo(user::class);
    }
}
