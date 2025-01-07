<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $subscriptions = Newsletter::paginate(10); // Get all subscriptions with pagination
        return view('admin.newsletter.index', compact('subscriptions'));
    }


    public function destroy($id)
    {
        $subscription = Newsletter::findOrFail($id);
        $subscription->delete();

        return redirect()->route('admin.newsletter.index')->with('success', 'Subscription deleted successfully.');
    }
}
