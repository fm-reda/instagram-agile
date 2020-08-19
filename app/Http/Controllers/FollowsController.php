<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FollowsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {

        return auth()->user()->following()->toggle($user->profile->id);
        // if ($post == "redirect") {
        //     return Redirect::to('/');
        // }
    }
}
