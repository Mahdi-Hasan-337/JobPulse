<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\LogoName;

class JobsController extends Controller {
    public function index() {
        $banners = Banner::all();
        $logoNames = LogoName::latest()->first();
        return view('jobs', compact('banners', 'logoNames'));
    }
}
