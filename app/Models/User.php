<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function houses(){
        return $this->hasMany(House::class, 'user_id');
    }
}
