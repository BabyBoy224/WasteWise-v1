<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Schedule extends Model
{
     use HasFactory;

    protected $fillable = ['barangayId', 'dayOfWeek', 'lastVisited'];
    public function barangay()
{
    return $this->belongsTo(\App\Models\Barangay::class, 'barangayId');
}

}
