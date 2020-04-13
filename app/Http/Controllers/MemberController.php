<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Member;

class MemberController extends Controller
{

    public function registration()
    {
      return view('member.register');
    }

    public function register(Request $request)
    {
      $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'phone' => 'required'
      ]);

      $newMember = new Member;

      $newMember->first_name = $request->firstname;
      $newMember->last_name = $request->lastname;
      $newMember->email = $request->email;
      $newMember->password = Hash::make($request->password);
      $newMember->phone = $request->phone;

      $newMember->save();
      return back()->with('success', 'Registration Success');
    }
}
