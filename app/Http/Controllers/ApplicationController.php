<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applications;

class ApplicationController extends Controller
{
    function showAppForm(){
        return view('applicationForm');
    }

}
