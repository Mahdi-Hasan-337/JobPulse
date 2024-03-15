<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;

class CandidateAdminController extends Controller {
    // public function index() {
    //     $userId = Auth::id();
    //     $portfolio = Portfolio::where('id', $userId)->first();

    //     if (!$portfolio) {
    //         // return with('error', 'Portfolio not found for the logged-in user.');
    //         return view('dashboard.candidate.dashboard');
    //     }

    //     // // Decode the JSON string back to an array for education data
    //     // $education = json_decode($portfolio->education, true);

    //     // return view('portfolio.show', ['portfolio' => $portfolio, 'education' => $education]);

    //     // Decode the JSON string back to an array
    //     $education = json_decode($portfolio->education, true);
    //     return view('dashboard.candidate.dashboard', ['portfolio' => $portfolio, 'education' => $education]);
    // }

    public function index() {
        $userId = Auth::id();
        $portfolio = Portfolio::where('user_id', $userId)->first();

        if (!$portfolio) {
            // Portfolio not found, set $education to an empty array
            $education = [];
            return view('dashboard.candidate.dashboard', ['portfolio' => $portfolio, 'education' => $education]);
        }

        // Decode the JSON string back to an array for education data
        $education = json_decode($portfolio->education, true);
        return view('dashboard.candidate.dashboard', ['portfolio' => $portfolio, 'education' => $education]);
    }
}

