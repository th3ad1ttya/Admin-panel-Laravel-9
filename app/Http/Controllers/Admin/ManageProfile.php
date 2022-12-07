<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManageProfile extends Controller
{
    public function manageMyProfile()
    {
        $profileController = User::all();
        return view('admin.manage-profile.manage-admin-profile', compact('profileController'));
    }

    public function updateProfile(Request $request)
    {
        $customValidationMessages = [
            'password.required' => 'Update password is required!',
            'password.min' => 'Please enter minimum 8 character password',
            'password.confirm' => 'Confirm password does not match!',
            'password.regex' => "Invalid password format!
            *Password must be contain at least 8-15 characters,
            *at least one number,
            *1 Uppercase letter and
            *1 Special characters",
            'username.unique' => 'username already taken. Please try deferent unique string'
        ];

        $request->validate([
            'username' => ['string', 'max:15', 'min:6', 'regex:/^(?=.{6,25}$)[a-z0-9]+(?:[_][a-z0-9]+)*[_]?$/'],
            'name' => ['string'],
            'email' => ['string'],
            'password' => ['string', 'min:8', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'],
        ], $customValidationMessages);

        $users = auth()->user();

        $users->name = $request['name'];
        $users->username = $request['username'];
        $users->email = $request['email'];
        $users->password = Hash::make($request['password']);

        $users->update();
        return redirect('admin/dashboard')->with('status', 'Profile updated');
    }
}
