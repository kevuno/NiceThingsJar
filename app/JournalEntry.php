<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    /**
     * Get the journals for the user.
     */
    public function user(){
        return $this->belongsTo('App\User');
    }


    /** For mass asigment */
    protected $guarded = ['id','user_id'];
}
