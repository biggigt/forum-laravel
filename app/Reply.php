<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Favoritable;

class Reply extends Model
{
    protected $guarded = [];
    /* Активная загрузка (eager loading)  */
    protected $with = ['owner', 'favorites'];
    
    protected $touches = ['thread'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function thread()
	{
	    return $this->belongsTo('App\Thread');
	}
}
