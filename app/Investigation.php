<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    protected $table='investigations';
    protected $primaryKey="investigation_id";

    protected $fillable = [
        'incident_id','user_id','investiagtion_statement', 'investiagtion_recomendation','investigation_status','partner_id'

    ];

    public function   incident()
    {
        return $this->belongsTo(Incident::class);
    }

}
