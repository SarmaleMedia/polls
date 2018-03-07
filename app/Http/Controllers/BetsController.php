<?php

namespace WC2018\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use WC2018\Http\Requests\BetsFormRequest;
use WC2018\Models\Bet;
use WC2018\Models\Match;


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
        $bets = Bet::getBetsForDisplay($user->id);

        // Get game complexity
        $complexGame = true;

        return view('matches.bets', ['groups' => $bets, 'complexGame' => $complexGame]);
    }

    public function saveBets(BetsFormRequest $request)
    {
        echo '<pre>';
        print_r($request->all());
        die();
    }
}
