<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Plan $plan)
    {
        $plans = $plan->with('features')->get();

        return view('home.index', compact('plans'));
    }
}
