<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['fullname','email','contact','password','profile'];

    public function summaries(){
        return $this->hasMany('App\Models\Summary');
    }
}
