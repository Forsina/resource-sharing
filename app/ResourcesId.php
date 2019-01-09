<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResourcesId;
class ResourcesId extends Model
{
    protected $fillable = ['title', 'content', 'url'];
}
