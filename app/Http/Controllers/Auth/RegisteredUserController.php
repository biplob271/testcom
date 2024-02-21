<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
          //  'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request['image']) {
            //Show File Name
            $image = '/images/' .pathinfo($request['image']->getClientOriginalName(), PATHINFO_FILENAME).'-'.time().'.'.$request['image']->getClientOriginalExtension();
            //Store File in Directory
            $request['image']->move('uploads/images/', $image);
        } else {
            $image = $request->oldimage;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'join_date' => $request->join_date,
            'designation' => $request->designation,
            'department' => $request->department,
            'qualification' => $request->qualification,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'blood_group' => $request->blood_group,
            'present_address' => $request->present_address,
            'status' => $request->status,
            'image' => $image
            
        ]);
       
        return redirect()->back()->with('success', 'User Added Successfully');
       
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
