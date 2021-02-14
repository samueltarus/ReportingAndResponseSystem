<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Assignment extends Model
{
    protected $table='assignments';
    protected $primaryKey="assingment_id";

    protected $fillable = [

        'assingment_name', 'client_id', 'number_of_employees','location_id', 'is_active'
    ];

    public function employees(){

        return $this->belongsTo(Employee::class);
    }

}
