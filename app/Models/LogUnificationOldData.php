<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogUnificationOldData extends Model
{
    protected $table = 'log_unification_old_data';

    public $timestamps = false;

    public function unification()
    {
        return $this->belongsTo(LogUnification::class, 'unification_id', 'id');
    }
}
