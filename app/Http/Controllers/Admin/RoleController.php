<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //
    public function create()
    {
        # code...
        Auth::guard('web')->user()->assignRole('Editer');
    }
}
