<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
Use App\User;
// use Validator;


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
    }//end method

    public function create()
    {
        return view('user.create');
    }//end method

    // public function store(Request $request)
    // {
    //     $data = $request->all();
    //     $validasi = Validator::make($data,[
    //         'name'=>'required|max:255',
    //         'email'=>'required|email|max:255|unique:users',
    //         'password'=>'required|min:8',

    //     ]);
    //     if($validasi->fails())
    //     {
    //         return redirect()->route('user.create')->withInput()->withErrors($validasi);
    //     }

    //     $data['password'] = bcrypt($data['password']);
    //     User::create($data);
    //     return redirect()->route('user.index');
    // }//end method

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('user.index');
    }//end method


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show',compact('user'));
    }

}
