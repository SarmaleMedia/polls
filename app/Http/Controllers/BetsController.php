<?php

namespace WC2018\Http\Controllers;

use Illuminate\Http\Request;
use WC2018\Models\Bet;


class BetsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'manager', 'admin']);
        $user = Auth::user();
        $bets = Bet::getBetsByUser($user->id);

        return view('bets', compact('bets'));
    }
}
