<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

  protected $table="comments";
    public $timestamps = false;
    public function post()
    {
    	return $this->belongsTo('App\Models\post');
    }
}    
