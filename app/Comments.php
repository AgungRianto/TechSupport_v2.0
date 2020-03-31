<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $fillable = [
        'comment_id',
        'request_id',
        'comment',
        'user_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function requests()
    {
        return $this->belongsTo(Requests::class);
    }
}
