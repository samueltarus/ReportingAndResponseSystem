<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    protected $table="assigns";
    protected $primaryKey ="assign_id";

    protected $fillable = [
        'employee_id', 'assignment_id'
    ];

    public function users(){

        return$this->hasMany(User::class);
    }

}
