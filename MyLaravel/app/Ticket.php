<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status'];
    //protected $guarded = ['id'];
    //protected $primaryKey = 'id';

    // each ticket is created by a user, we can tell tickets 
    // belongs to users by writing like this:
    public function user() { 
        return $this->belongsTo('App\User'); 
    }

    //use this model to access any ticket's data, such as: title, content, etc.
    public function getTitle() { 
        return $this->title; 
    }

    public function comments() { 
        return $this->hasMany('App\Comment', 'post_id'); 
    }


}
