<?php

namespace App\Http\Controllers\ApplicantAuth;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredApplicantController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('applicant.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */


    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:applicants'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nationality' => ['required', 'string', 'max:100'],
        ]);


        // Create a new NormalUser record in the database
        $user = Applicant::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nationality' => $request->nationality,
        ]);

        return redirect()->route('applicant.index');
    }
}
