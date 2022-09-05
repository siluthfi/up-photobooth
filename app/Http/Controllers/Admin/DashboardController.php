<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user() && url()->current() == route('admin.dashboard')) {
            return view('admin.dashboard');
        }
        
        return view('dashboard.index', [
            'active' => 'dashboard'
        ]);
    }

    public function contact()
    {
        return view('dashboard.contact', [
            'title' => 'Kontak',
            'active' => 'contact'
        ]);
    }

    public function about()
    {
        return view('dashboard.about', [
            'title' => 'Tentang Kami',
            'active' => 'about'
        ]);
    }
}
