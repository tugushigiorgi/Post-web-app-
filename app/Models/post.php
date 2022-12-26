<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table="posts";
    protected $fillable=['text'];
    public $timestamps = false;
    public function comments()
    {
    	return $this->hasMany('App\Models\comment');
    }
}
