<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\User;
use Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $user = User::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('user.index', compact('user'));
    }
    //end method
}
