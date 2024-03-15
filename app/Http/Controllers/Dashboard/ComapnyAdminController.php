<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComapnyAdminController extends Controller {
    public function index() {
        $user = Auth::User();
        $jobs = $user->jobs;

        $companyEmployees = User::where('usertype', 'company')->get();
        return view('dashboard.company.dashboard', compact('jobs', 'companyEmployees'));
    }

    public function storeJob(Request $request) {

        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'benefits' => 'required|string',
            'location' => 'required|string',
            'deadline' => 'required|date',
        ]);

        $userId = Auth::id();

        $job = new Job();
        $job->user_id = $userId;
        $job->title = $validatedData['title'];
        $job->description = $validatedData['description'];
        $job->benefits = $validatedData['benefits'];
        $job->location = $validatedData['location'];
        $job->deadline = $validatedData['deadline'];
        $job->save();

        return redirect()->back()->with('success', 'Job created successfully!');

    }

    public function updateJob(Request $request, Job $job) {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $job->update($request->all());

        return redirect()->back()->with('success', 'Job updated successfully.');
    }

    public function destroy($id) {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->back()->with('success', 'Job deleted successfully.');
    }

}
