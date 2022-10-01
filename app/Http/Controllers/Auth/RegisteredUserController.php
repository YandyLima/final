<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use DateTime;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $this->authorize('role-operator-admin', User::class);
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'second_name' => ['string', 'max:255'],
            'first_lastname' => ['required', 'string', 'max:255'],
            'second_lastname' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date', 'max:255'],
            'dpi' => ['required', 'size:13'],
            'profession' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'file', 'mimes:jpg,png', 'dimensions:width=600,height=400'],
            'years_working' => ['required', 'string', 'max:80'],
            'salary' => ['required', 'numeric'],
            'email' => ['required', 'email', 'unique:users'],
            'email_verified_at' => ['confirmed', 'max:255'],
        ]);
        $fileName = $request->file('photo')->store('uploads', 'public');
        $date = new DateTime();
        $date->modify($request->date_of_birth);
        $birthday = $date->format('Y-m-d');
        $date_18 = date("Y-m-d", strtotime(date('Y-m-d') . "- 18 years"));
        if ($birthday <= $date_18) {
            $password = Str::random(10);

            $user = User::create([
                'first_name' => $request->first_name,
                'second_name' => $request->second_name,
                'first_lastname' => $request->first_lastname,
                'second_lastname' => $request->second_lastname,
                'married_name' => $request->married_name ?? null,
                'date_of_birth' => $request->date_of_birth,
                'dpi' => $request->dpi,
                'profession' => $request->profession,
                'photo' => $fileName,
                'years_working' => $request->years_working,
                'salary' => $request->salary,
                'email' => $request->email,
                'password' => Hash::make($password),
                'status_id' => 1,
                'role_id' => 3,
                'email_verified_at' => $request->email_verified_at,
            ]);
            $information = ['mail' => $user->mail, 'password' => $password, 'first_name' => $user->first_name, 'first_lastname' => $user->first_lastname];
            $content = 'Se confirmó su usuario';
            $to = $user->email;
            Mail::send('mail.confirmation', $information, function ($msj) use ($content, $to) {
                $msj->subject($content);
                $msj->to($to);
            });

            return redirect()->route('login')->withSuccess('User created successfully');
        } else {
            return redirect()->back()->withErrors('No eres mayor de edad');
        }

    }


}
