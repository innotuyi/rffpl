<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function showAnalytics()
{
    // $totalUsers = User::count();
    // $totalLoans = Loan::sum('amount');
    // $totalExpenditures = Expenditure::sum('amount');
    // $totalProperties = Property::count();

    // $recentActivities = Activity::latest()->take(5)->get();

    // $loanMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    // $loanAmounts = [100000, 150000, 200000, 250000, 300000, 350000]; // Example data
    // $userMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    // $userCounts = [50, 60, 70, 80, 90, 100]; // Example data

    return view('admin.analytics.index');
}

}
