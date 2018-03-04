<?php

namespace WC2018\Http\Controllers;

use Illuminate\Http\Request;
use WC2018\Models\Match;

class MatchesController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'manager', 'admin']);

        $matches = Match::getMatchesForDisplay();

        return view('matches.list',['groups' => $matches]);
    }
}
