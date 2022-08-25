<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dps extends Model
{
    protected $fillable = [
        'user_id','interset_rate', 'installment_amount', 'duration','mature_amount','year'
    ];

    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
