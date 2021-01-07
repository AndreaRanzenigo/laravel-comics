<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDescription extends Controller
{
    //Description comic
    public function show($id)
    {
        return 'Description Comic' . $id;
    }
}
