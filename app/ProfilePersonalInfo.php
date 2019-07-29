<?php

namespace App;

use App\Profile;
use Illuminate\Database\Eloquent\Model;

class ProfilePersonalInfo extends Model
{
    protected $casts=['show'];
    protected $fillable = ['show','profile_id','address','phone_number','nationality','sex','marital_status'];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
