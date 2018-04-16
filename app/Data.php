<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';

    protected $fillable = [
        'section_id',
        'key',
        'karat_message'
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }
}
