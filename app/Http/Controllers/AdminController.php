<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function getMembers() {
        return view('/admin/members', [
            'members' => User::orderBy('name', 'asc')->paginate(10),
            'count' => User::all()->count()
        ]);
    }
}
