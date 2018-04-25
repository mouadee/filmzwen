<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Film extends Model
{
    	use Notifiable;
	

    protected $table = 'films';
    
    protected $fillable = [
        'Youtube_url',
        'Film_title',
        'Film_poster',
        'Film_Description',
        'Film_Hero',
        'Film_types',
        'Film_times',
        'Film_feedback',
        'Film_quality',
        'Film_download',
        'Film_link',
        'Film_Actor',
        'Film_productionYears',
        'Film_language',
    ];
}
