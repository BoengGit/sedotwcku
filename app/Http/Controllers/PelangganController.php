<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\User;
use Validator;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $pelanggan = User::where('level', 'pelanggan')->paginate(3);

        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $pelanggan = User::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('pelanggan.index', compact('pelanggan'));
    }//end method

    public function create()
    {
        return view('pelanggan.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:pelanggans',
            'address'=>'required|max:100',
            'telepon'=>'required|max:13',
            'password'=>'required|min:8',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('pelanggan.create')->withInput()->withErrors($validasi);
        }

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('pelanggan.index');
    }//end method

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('pelanggan.index');
    }//end method


    public function show($id)
    {
        $pelanggan = User::findOrFail($id);
        return view('pelanggan.show',compact('pelanggan'));
    }
    public function edit($id)
    {
        $pelanggan = User::findOrFail($id);
        return view('pelanggan.edit',compact('pelanggan'));
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
    $pelanggan = User::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
     'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:pelanggans,email,'.$id,
            // 'pelangganname'=>'required|max:100|unique:pelanggans,pelangganname,'.$id,
            'password'=>'sometimes|nullable|min:6'
        ]);
        if($validasi->fails())
        {
            return redirect()->route('pelanggan.create',[$id])->withErrors($validasi);
        }

      if($request->input('password'))
     {
         $data['password'] = bcrypt($data['password']);
    }
      else
      {
           $data = Arr::except($data,['password']);
      }
       $pelanggan->update($data);
    //    Alert::toast('Berhasil di edit','success');
       return redirect()->route('pelanggan.index');
    }

}
