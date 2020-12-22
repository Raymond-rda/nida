<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'name','province_id'
    ];
    public function Population()
    {
        return $this->hasMany('App\Population','district_id');
    }
    public function Province()
    {
        return $this->belongsTo('App\Province');
    }
}
