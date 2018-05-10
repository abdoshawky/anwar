<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name'
    ];

    public function titles(){
        return $this->hasMany(Title::class);
    }
}
