<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Play extends Model
{

	use Notifiable;
	

    protected $table = 'plays';
    
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
        'Film_season',
        'Film_ring',
        'Film_productionYears',
    ];
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}


