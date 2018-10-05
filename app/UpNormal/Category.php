<?php

namespace App\UpNormal;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'upnormal_categories';

    protected $fillable = [
        'id',
        'name'
    ];

    public function titles(){
        return $this->hasMany(Title::class);
    }
}
