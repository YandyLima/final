<?php

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\User;
use App\Models\UserStatus;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statusShow()
    {
        $status = Auth::user()->status->name;
        return view('users.status', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('role-admin', User::class);
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
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

            return back()->withsuccess('User created successfully');
        } else {
            return redirect()->back()->withErrors('No eres mayor de edad');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('role-operator-admin', User::class);
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('role-admin', User::class);
        $user = User::find($id);
        $statuses = UserStatus::where('id', '<>', $user->status_id)->get();
        $roles = Role::where('id', '<>', $user->role_id)->get();
        return view('users.edit', compact('user', 'statuses', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('role-admin', User::class);
        $user = User::find($id);

        $validate = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'second_name' => ['string', 'max:255'],
            'first_lastname' => ['required', 'string', 'max:255'],
            'second_lastname' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date', 'max:255'],
            'dpi' => ['required', 'size:13'],
            'profession' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'file', 'mimes:jpg,png', 'dimensions:width=600,height=400'],
            'years_working' => ['required', 'string', 'max:80'],
            'salary' => ['required', 'numeric'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user)],
            'status_id' => ['required', 'integer', 'exists:users_status,id'],
            'role_id' => ['required', 'integer', 'exists:roles,id'],
            'email_verified_at' => ['confirmed', 'max:255'],
        ]);
        if ($request->photo) {
            $validate['photo'] = $request->file('photo')->store('uploads', 'public');
            Storage::delete($user->photo);
        }
        $user_status = $user->status_id;
        $user->update($validate);
        if ($user_status != $request->status_id) {
            if ($user->status_id == 2 || $user->status_id == 3) {
                $information = ['status' => $user->status->name, 'first_name' => $user->first_name, 'first_lastname' => $user->first_lastname];
                $content = 'Estado se la solicitud';
                $to = $user->email;
                Mail::send('mail.status', $information, function ($msj) use ($content, $to) {
                    $msj->subject($content);
                    $msj->to($to);
                });
            }
        }
        return redirect('/dashboard')->withSuccess('Usuario Actualizado Con Exito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('role-admin', User::class);
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'Usuario Borrado Con Exito');
    }

    public function update_status(Request $request, $id){
        $this->authorize('role-operator-admin', User::class);
        $user = User::find($id);
        $user->status_id = $request->status_id;
        $user->save();
        $information = ['status' => $user->status->name, 'first_name' => $user->first_name, 'first_lastname' => $user->first_lastname];
        $content = 'Estado se la solicitud';
        $to = $user->email;
        Mail::send('mail.status', $information, function ($msj) use ($content, $to) {
            $msj->subject($content);
            $msj->to($to);
        });
        return redirect()->route('dashboard')->with('success', 'Usuario Actualizado Con Exito');
    }
}
