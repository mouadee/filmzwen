<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    
    protected $fillable = [
    	'comment',
    	'comment_id',
    	'heartFeedback',
    ];
}
