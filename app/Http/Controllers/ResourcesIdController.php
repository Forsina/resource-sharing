<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesIdController extends Controller
{
    public function show(ResourcesId $resource){
    	return $resource;
    }
}
