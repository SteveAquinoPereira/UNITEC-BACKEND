<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $primaryKey = 'id_section';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }
}
