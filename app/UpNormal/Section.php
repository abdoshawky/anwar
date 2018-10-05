<?php

namespace App\UpNormal;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'upnormal_sections';

    protected $fillable = [
        'id',
        'title_id',
        'name'
    ];

    public function title(){
        return $this->belongsTo(Title::class);
    }
}
