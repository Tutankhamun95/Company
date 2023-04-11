<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title', 'content', 'category_id','company_id', 'user_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
}
