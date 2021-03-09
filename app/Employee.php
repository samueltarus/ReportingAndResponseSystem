<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use Notifiable;
    protected $table='users';
    protected $primaryKey="id";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name',  'username', 'phone_number','name', 'email', 'role_id','user_photo','security_company','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function assingments(){


    return $this->belongsTo(Assignment::class);

    }
    public function company()
    {

      return $this->belongsTo(Company::class);

    }
}
