<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        return view('admin.auth.register');
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' .Admin::class],
            'phone' => ['required', 'string', 'max:15', 'unique:' . Admin::class], // Menambahkan validasi untuk nomor telepon
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        

       $admin = Admin::create([
    'name' => $request->name,
    'email' => $request->email,
    'phone' => $request->phone, // Menyimpan nomor telepon
    'password' => Hash::make($request->password),
]);


        event(new Registered($user));

        Auth::guard('admin')->login($admin);

        return redirect(route('admin.dashboard', absolute: false));
    }
}
