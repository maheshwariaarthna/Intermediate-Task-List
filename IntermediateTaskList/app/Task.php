<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=['name'];
    public function user()
    {
    	return $this->belongsTo(\Ap\User::class);
    }
}
