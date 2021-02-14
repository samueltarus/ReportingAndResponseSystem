<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='users';
    protected $primaryKey="id";

    protected $fillable = [
        'name', 'email', 'role_id','user_photo','security_company','password',
    ];

    public function assingments(){


    return $this->belongsTo(Assignment::class);

    }
    public function company()
    {

      return $this->belongsTo(Company::class);

    }
}
