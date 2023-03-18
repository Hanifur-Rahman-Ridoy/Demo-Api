<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public $users;
    public function userList()
    {
        $this->users = User::get();
        return response()->json(['users' => $this->users], 200);
    }

    public function addUser(Request $request)
    {
        
        return response()->json(['message' => $request], 200);
    }
}
