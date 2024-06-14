<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
       // Get the authenticated user
       $user = Auth::user();

       // Count total contacts for the authenticated user
       $totalContacts =  Contact::where('user_id', Auth::id())->count();

       // Count total groups for the authenticated user
       $totalGroups = Group::where('user_id', Auth::id())->count();

        return view('dashboard', [
            'totalContacts' => $totalContacts,
            'totalGroups' => $totalGroups,
        ]);
    }
}
