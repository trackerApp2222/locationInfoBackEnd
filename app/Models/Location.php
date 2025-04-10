<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['latitude', 'longitude', 'ip', 'address', 'user_email', 'user_name'];
}
