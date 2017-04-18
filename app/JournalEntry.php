<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    //
    protected $guarded = ['id','user_id'];
}
