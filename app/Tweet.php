<?php

namespace App;

use App\Tweet;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $guarded=[];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
