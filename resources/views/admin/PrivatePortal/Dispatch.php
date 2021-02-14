<?php

namespace App\PrivatePortal;

use Illuminate\Database\Eloquent\Model;

class Dispatch extends Model
{
    protected $table ='dispatches';
    protected $primaryKey ='dispatch_id';

    protected $fillable = [
         'first_name', 'last_name','username', 'email',  'phone_number','password',
    ];

}
