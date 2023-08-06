<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subscription_plans = DB::table("subcription_plans")->get();
        $subscription_plans->map(function($item,$key)
        {
            $plan_details = DB::table("subcription_plan_details")->where("plan_id",$item->id)->first();
            $item->plan_details = $plan_details;
            return $item;
        });
        return view('home',compact('subscription_plans'));
    }

    public function getSubscriptionPlans(Request $request)
    {
        $subscription_plans = DB::table("subcription_plans")->get();
        $subscription_plans->map(function($item,$key)
        {
            $plan_details = DB::table("subcription_plan_details")->where("plan_id",$item->id)->first();
            $item->plan_details = $plan_details;
            return $item;
        });
        return $subscription_plans;

    }
}
