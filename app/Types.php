<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $fillable = [
        'type_id',
        'type_name',
        'description',
    ];

    public function request()
    {
        return $this->hasMany(Requests::class);
    }
}
