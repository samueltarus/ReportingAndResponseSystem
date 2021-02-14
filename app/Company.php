<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';
    protected $primaryKey="company_id";

    protected $fillable = [

        'company_name', 'location', 'status'
    ];

    public function employees(){

        return $this->hasMany('App\User','id');
    }

}
