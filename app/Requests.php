<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requests extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    	'user_name',
        'subject',
        'type_name',
		'note',
		'attachment',
        'request_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comment()
    {
        return $this->hasMany(Comments::class);
    }

    public function type()
    {
        return $this->belongsTo(Types::class);
    }
}
