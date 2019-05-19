<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
<<<<<<< HEAD
    //
=======
    protected $guarded = [];
        
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
>>>>>>> 2cc472ead12c1d3acf6547673caa45fddf7582c2
}
