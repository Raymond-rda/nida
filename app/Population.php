<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    protected $table = 'populations';
    protected $fillable = [
        'province_id','district_id','name','biometric','nid','sex','dob','phone','profile','vote_id'
    ];
    public function Province()
    {
        return $this->belongsTo('App\Province');
    }
    public function District()
    {
        return $this->belongsTo('App\District');
    }
}
