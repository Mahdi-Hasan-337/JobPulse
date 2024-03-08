<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\LogoName;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

class SystemAdminController extends Controller {

    public function index() {
        $allusers = User::all();

        $allSystemEmployees = User::where('usertype', 'system')->get();

        $pendingCompanies = User::where('usertype', 'company')
            ->where('verify', 'pending')
            ->get();
        $allCompanies = User::where('usertype', 'company')->get();

        $visibleBanners = Banner::where('status', '1')->get();
        $invisibleBanners = Banner::where('status', '0')->get();

        $logoName = LogoName::latest()->first();

        return view('dashboard.system.dashboard', compact('allSystemEmployees', 'allCompanies', 'allusers', 'pendingCompanies', 'visibleBanners', 'invisibleBanners', 'logoName'));
    }

    public function updateRole(Request $request, $id) {
        $employee = User::findOrFail($id);

        $employee->role = $request->input('role');
        $employee->save();

        return redirect()->back()->with('success', 'Role updated successfully');
    }

    public function toggleVerifyStatus(Request $request, $encryptedCompanyId) {
        $userId = Crypt::decrypt($encryptedCompanyId);
        $user = User::findOrFail($userId);

        $user->verify = $user->verify === 'verified' ? 'pending' : 'verified';
        $user->save();

        return redirect()->back()->with('success', 'Verification status updated successfully.');
    }

    public function CreateBanner(Request $request) {
        $banner = new Banner;

        $banner->heading = $request->input('heading');
        $banner->description = $request->input('description');
        $banner->link = $request->input('link');
        $banner->link_name = $request->input('link_name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileNameToStore = 'post_image_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $fileNameToStore);

            $banner->image = $fileNameToStore;
        }

        $banner->status = $request->input('status') == true ? '1' : '0';

        $banner->save();

        return redirect()->back()->with('success', 'Banner added successfully');
    }

    public function updateBannerStatus($encryptedUserId) {
        $ID = Crypt::decrypt($encryptedUserId);
        $banner = Banner::findOrFail($ID);
        $banner->update(['status' => $banner->status == 1 ? 0 : 1]);
        return back()->with('status', 'status-updated');
    }

    public function EditBanner(Request $request, $id) {
        $slider = Banner::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found');
        }

        $slider->heading = $request->input('heading');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');

        if ($request->hasFile('image')) {
            $destination = 'uploads/' . $slider->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $image = $request->file('image');
            $fileNameToStore = 'post_image_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $fileNameToStore);

            $slider->image = $fileNameToStore;
        }

        $slider->status = $request->input('status') == true ? '1' : '0';

        $slider->save();

        return redirect()->back()->with('success', 'Slider updated successfully');
    }

    public function createLogoName(Request $request) {
        // Check if a record already exists
        $existingLogoName = LogoName::first();

        // If a record exists, update its data
        if ($existingLogoName) {
            $existingLogoName->name = $request->input('name');
            $existingLogoName->history = $request->input('history');
            $existingLogoName->vision = $request->input('vision');
            $existingLogoName->aboutbanner = $request->input('aboutbanner');
            $existingLogoName->jobbanner = $request->input('jobbanner');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $fileNameToStore = 'post_image_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/'), $fileNameToStore);

                $existingLogoName->image = $fileNameToStore;
            }

            $existingLogoName->save();

            return redirect()->back()->with('success', 'Logo name updated successfully');
        }

        // If no record exists, create a new record
        $logoname = new LogoName;

        $logoname->name = $request->input('name');
        $logoname->history = $request->input('history');
        $logoname->vision = $request->input('vision');
        $logoname->aboutbanner = $request->input('aboutbanner');
        $logoname->jobbanner = $request->input('jobbanner');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileNameToStore = 'post_image_' . md5((uniqid())) . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/'), $fileNameToStore);

            $logoname->image = $fileNameToStore;
        }

        $logoname->save();

        return redirect()->back()->with('success', 'Logo name added successfully');
    }
}
