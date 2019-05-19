<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function scopeFilter($query, ThreadFilters $filters)
	{
	    return $filters->apply($query);
	}
}
