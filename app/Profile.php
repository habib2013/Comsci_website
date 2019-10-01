<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage(){
        $imagepath = ($this->image) ? $this->image: 'profile/GB1FPCr0zRRPHJdYasw2mpuSd4ncnuDNe1L2GB0b.jpeg';
        return '/storage/'. $imagepath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
 
}
