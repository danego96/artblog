<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed'],

        ]);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images', 'public');
            if (!$imagePath) {
                return redirect()->back()->with('error', 'Failed to upload image.');
            }
            $formFields ['image'] = $request ->file('image')->store('images', 'public');
        }
          

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/');
    }
}
