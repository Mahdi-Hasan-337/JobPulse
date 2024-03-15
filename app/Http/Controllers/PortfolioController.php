<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller {
    public function store(Request $request) {
        $user_id = $request->input('user_id');

        $portfolio = Portfolio::where('user_id', $user_id)->first();

        if ($portfolio) {
            // Portfolio exists, update it
            $portfolio->fill($request->all());
            $portfolio->education = json_encode($request->input('education'));
            $portfolio->save();

            return redirect()->back()->with('success', 'Portfolio updated successfully');
        } else {
            // Portfolio doesn't exist, create a new one
            $portfolio = new Portfolio();
            $portfolio->fill($request->all());
            $portfolio->user_id = $user_id;
            $portfolio->education = json_encode($request->input('education'));
            $portfolio->save();

            return redirect()->back()->with('success', 'Portfolio created successfully');
        }
    }
}
