<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sch_dues_role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paydues()
    {
        return $this->belongsTo(Paydues::class);
    }

}
