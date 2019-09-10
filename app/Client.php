<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function serves()
    {
        return $this->hasMany(Serve::class);
    }
}
