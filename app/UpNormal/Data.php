<?php

namespace App\UpNormal;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'upnormal_data';

    protected $fillable = [
        'id',
        'section_id',
        'key',
        'karat_message'
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }
}
