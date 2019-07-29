<?php

namespace App;

use App\User;
use App\ProfilePersonalInfo;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['bio','dob','user_id'];

    public function personalInfo(){
        return $this->hasOne(ProfilePersonalInfo::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
