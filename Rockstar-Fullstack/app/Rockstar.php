<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rockstar extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama', 'phone', 'email', 'company'];
}
