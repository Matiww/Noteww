<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {
    protected $table = 'notes';
    protected $with = ['user'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
