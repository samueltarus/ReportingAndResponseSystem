<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table ='locations';
    protected $primaryKey ='location_id';

    protected $fillable = [

         'country','county','town','location','partner_id','status','user_id'

    ];

    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }


}
