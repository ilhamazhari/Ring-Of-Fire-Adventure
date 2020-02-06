<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function login(Request $request)
    {
      //
    }

    public function registration()
    {
      return view('member.register');
    }
}
