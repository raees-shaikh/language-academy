<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class ChangePasswordController extends Controller
{

    public function changePassword()
    {
        $user = Auth::user();
        return view('admin.password.change_password', compact('user'));
    }

    public function passwordChange(Request $request)
    {
        $id = Auth::user()->id;
        $validate = $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', "unique:users,email,$id"],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $password = Auth::user();
        // $password->name = $request->name;
        $password->email = $request->email;
        $password->password = Hash::make($request->password);
        if ($password->save()) {
            // $notification = array(
            //     'message'   => 'Change Password Successfully',
            //     'alert-type' => 'success'
            // );
            return redirect()->back()->with(notify('password'));
        } else {
            // $notification = array(
            //     'message'   => 'Something went wrong',
            //     'alert-type' => 'error'
            // );
            return redirect()->back()->with(notify('error'));
        }

        // return redirect(route('home'))->with($notification);
    }
}
