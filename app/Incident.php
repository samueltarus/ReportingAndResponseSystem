<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $table='incidents';
    protected $primaryKey="incident_id";

    protected $fillable = [
       'incident_id', 'user_id','incident_type','incident_date', 'incident_description', 'name_of_parties_involved','name_of_witness',
    ];

    public function   assingments()
    {
        return $this->belongsTo(Assignment::class);
    }
    
    public function clients(){
        return $this->belongsTo(Client::class);

        }

        public function investigatipon(){
            return $this->hasMany(Investigation::class);

            }

}
