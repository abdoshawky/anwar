<?php

namespace App\UpNormal;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'upnormal_titles';

    protected $fillable = [
        'id',
        'category_id',
        'name'
    ];

    public function sections(){
        return $this->hasMany(Section::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
