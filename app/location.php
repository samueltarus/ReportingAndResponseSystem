<?php

namespace App\PrivatePortal;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table ='locations';
    protected $primaryKey ='location_id';

    protected $fillable = [
         'country','county','town','location'
    ];
}
