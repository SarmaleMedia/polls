<?php

namespace WC2018\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use WC2018\Models\Group;

class GroupsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function settings(Request $request, $groupId = null)
    {
        $request->user()->authorizeRoles(['manager', 'admin']);

        $user = Auth::user();
        $userGroupId = $user->group_id;

        if (empty($userGroupId) && $user->hasRole('manager')) {
            $userGroupId = $groupId;
        }

        $group = Group::find($userGroupId);

        return view('group.show',['group' => $group]);
    }

    public function updateSettings(Request $request, $groupId = null)
    {
        // update settings

        return redirect()->with('status', 'Settings were updated successfully!');
    }
}
