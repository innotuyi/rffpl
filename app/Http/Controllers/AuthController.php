<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Program;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
        // Fetch Statistics
        $totalUsers = User::count();
        $totalBlogs = Blog::count();
        $totalPrograms = Program::count();
        $totalContacts = Contact::count();

        // User Growth Data (e.g., past 6 months)
        $userGrowth = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $userGrowthLabels = $userGrowth->pluck('month')->map(function ($month) {
            return Carbon::createFromFormat('m', $month)->format('F');
        });

        $userGrowthData = $userGrowth->pluck('count');

        // Program Stats (e.g., number of programs by type)
        $programStats = Program::selectRaw('title, COUNT(*) as count')
            ->groupBy('title')
            ->get();

        $programStatsLabels = $programStats->pluck('title');
        $programStatsData = $programStats->pluck('count');

        // Recent Contacts
        $recentContacts = Contact::latest()->take(5)->get();

        return view('admin.pages.index', compact(
            'totalUsers',
            'totalBlogs',
            'totalPrograms',
            'totalContacts',
            'userGrowthLabels',
            'userGrowthData',
            'programStatsLabels',
            'programStatsData',
            'recentContacts'
        ));
    }
    else {
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    }
    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
