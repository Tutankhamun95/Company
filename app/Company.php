<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'title', 'content', 'user_id'
    ];
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

        public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
