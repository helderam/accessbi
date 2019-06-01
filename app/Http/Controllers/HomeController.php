<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Group;

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
        
        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user();
            $id = Auth::id();
            //$groups = $user->groups;
            $groups = DB::select("
                select g.id, g.name, g.description, gr.report_id, 
                       r.name as report_name, r.description as r_description, r.link
                from groups g
                join group_user gu on gu.group_id = g.id
                join group_report gr on gr.group_id = gu.group_id
                join reports r on r.id = gr.report_id
                where gu.user_id = $id
            ");
            /*
            foreach ($groups as $group) {
                var_dump($group);
            }

            var_dump($id);
            exit;
            */

            return view('home')->with('groups', $groups);

        } else {
            return "FAZER LOGIN";
        }
    }
}
