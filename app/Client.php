<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    protected $primaryKey="client_id";

    protected $fillable = [

        'first_name', 'last_name', 'username','email','phone_number', 'is_active'
    ];

    public function assignments(){

        return $this->hasMany(Assignment::class);
    }
    public function incidences(){

        return $this->hasMany(Client::class);
    }
}
