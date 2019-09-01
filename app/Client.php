<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name'
    ];

    public function serves()
    {
        return $this->hasMany(Serve::class);
    }
}
