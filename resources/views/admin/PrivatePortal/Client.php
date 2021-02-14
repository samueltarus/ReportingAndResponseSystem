<?php

namespace App\PrivatePortal;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table ='clients';
    protected $primaryKey ='client_id';

    protected $fillable = [
         'first_name', 'last_name','username', 'email',  'phone_number','password',
    ];

}
