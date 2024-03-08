<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\LogoName;

class AboutController extends Controller {
    public function index() {
        $banners = Banner::all();
        $logoNames = LogoName::latest()->first();
        return view('about', compact('banners', 'logoNames'));
    }
}
