<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class ComapnyAdminController extends Controller {
    public function index() {
        return view('dashboard.company.dashboard');
    }
}
