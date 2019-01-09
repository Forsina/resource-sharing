<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourcesId extends Model
{
    protected $fillable = ['title', 'content', 'url'];
}
