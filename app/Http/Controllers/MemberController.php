<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        'phone' => 'required|number'
      ]);

      $newMember = new Member;

      $newMember->first_name = $request->first_name;
      $newMember->last_name = $request->last_name;
      $newMember->email = $request->email;
      $newMember->password = Hash::make($request->password);
      $newMember->phone = $request->phone;

      if($newMember->save()){
        return redirect('/')->with('success', 'Registration Success');
      }
      return redirect('/')->with('error', 'Registration Failed');
    }
}
