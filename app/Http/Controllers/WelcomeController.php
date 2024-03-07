<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\LogoName;

class WelcomeController extends Controller {
    public function index() {
        $banners = Banner::all();
        $logoName = LogoName::latest()->first();
        return view('welcome', compact('banners', 'logoName'));
    }
}
