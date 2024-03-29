<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
Use App\User;
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
    }//end method

    public function create()
    {
        return view('user.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:8',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('user.create')->withInput()->withErrors($validasi);
        }

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('user.index');
    }//end method

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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
     'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users,email,'.$id,
            // 'username'=>'required|max:100|unique:users,username,'.$id,
            'password'=>'sometimes|nullable|min:6'
        ]);
        if($validasi->fails())
        {
            return redirect()->route('user.create',[$id])->withErrors($validasi);
        }

      if($request->input('password'))
     {
         $data['password'] = bcrypt($data['password']);
    }
      else
      {
           $data = Arr::except($data,['password']);
      }
       $user->update($data);
    //    Alert::toast('Berhasil di edit','success');
       return redirect()->route('user.index');
    }

}
