<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{protected $fillable =[
    'Title',
    'id'
    ];
    use HasFactory;

    public function database()
    {
        return$this->belongsToMany(database::class);
    }
}
