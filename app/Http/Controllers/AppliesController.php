<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class AppliesController extends Controller {
    public function store(Request $request) {
        // Validate the incoming request data
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
        ]);

        // Create a new application instance
        $apply = new Apply();
        $apply->user_id = auth()->id(); // Assuming you're using authentication
        $apply->job_id = $request->input('job_id');
        $apply->save();

        // Redirect the user back or to a success page
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
