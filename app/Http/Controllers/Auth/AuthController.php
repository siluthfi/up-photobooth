<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\LogHistory;
use App\Models\CreateLogHistory;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use CreateLogHistory;
    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $log = $this->insertLog('login');
            // dd($log);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        $log = $this->insertLog("logout");
        Auth::logout();
        request()->session()->regenerate();
        return redirect()->route('admin.login');
    }
}
