<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name', 'email', 'role_id','phone_number','partner_id','user_photo','security_company','password',
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


    public function company(){
        return $this->belongsTo('App\Company','company_id');
}
        public function roles(){

            return $this->hasOne('App\Role','role_id');
        }

        public function assingments(){


            return $this->belongsTo(Assignment::class);

            }


    public function assign(){

        return$this->belongsTo(Assign::class);
    }

    public function assignment(){

        return $this->hasMany(Assignment::class);
    }

}
