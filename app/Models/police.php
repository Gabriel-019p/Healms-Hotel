<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class police extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function make_sessions()
    {
        return $this->belongsTo(make_sessions::class);
    }

} 