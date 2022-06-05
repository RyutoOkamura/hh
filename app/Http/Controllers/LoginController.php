<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function post (Request $request)
    {
        $id = $request->id;
        $pass = $request->pass;
        if ($id === 'goodgrief' && $pass === 'haunt')  {
            return view ('special');
        } else {
            return view ('auth.login');
        }
    }
}
