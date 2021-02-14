<?php

namespace App\PrivatePortal;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table ='employees';
    protected $primaryKey ='employee_id';

    protected $fillable = [
         'first_name', 'last_name','username', 'email',  'phone_number','password','is_active'
    ];


}
