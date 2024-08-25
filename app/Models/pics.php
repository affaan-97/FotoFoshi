<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pics extends Model
{
    use HasFactory;

    protected $fillable = ['description','name','user_id','image'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
