<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailChangeLog extends Model
{
    protected $table = 'email_change_log';

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
