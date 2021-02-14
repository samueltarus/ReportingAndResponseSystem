<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table='response';
    protected $primaryKey="response_id";

    protected $fillable = [
       'response_id','user_id','location'
    ];

    public function   users()
    {
        return $this->belongsTo(User::class);
    }


}
