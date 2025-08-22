<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\QuizSubmission;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'admin';

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function showRegister()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin'
        ]);

        Auth::login($admin);
        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        $users = User::where('role', 'user')
            ->withCount([
                'quizSubmissions as correct_answers' => function ($query) {
                    $query->where('is_correct', 1);
                }
            ])
            ->with([
                'quizSubmissions' => function ($query) {
                    $query->select('id', 'user_id', 'time_taken', 'submitted_at')
                        ->latest('submitted_at');
                },
                'colleges' 
            ])
            ->whereHas('quizSubmissions')
            ->withMax('quizSubmissions', 'submitted_at')
            ->orderByDesc('quiz_submissions_max_submitted_at')
            ->get();

        return view('admin.dashboard', compact('users'));
    }

}
