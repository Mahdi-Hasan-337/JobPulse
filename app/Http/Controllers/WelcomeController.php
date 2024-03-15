<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Job;
use App\Models\LogoName;
use App\Models\User;

class WelcomeController extends Controller {
    public function index() {
        $banners = Banner::all();
        $logoName = LogoName::latest()->first();
        $jobs = Job::take(7)->get();
        // $jobs = Job::all();
        $topcompanies = User::where('usertype', 'company')->get();
        return view('welcome', compact('banners', 'logoName', 'topcompanies', 'jobs'));
    }
    public function show(Job $job) {
        return view('jobshow', compact('job'));
    }
}
