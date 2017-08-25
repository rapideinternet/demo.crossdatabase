<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function getConnectionName()
    {
        return 'database2';
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
