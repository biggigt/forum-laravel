<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Thread;
use App\User;

class Reply extends Model
{
    use Favoritable;

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
	    return $this->belongsTo(Thread::class);
	}
}
