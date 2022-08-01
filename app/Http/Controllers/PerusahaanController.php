<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
Use App\Perusahaan;
use Validator;

class PerusahaanController extends Controller
{
    public function index(Request $request)
    {
        $perusahaan = perusahaan::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $perusahaan = perusahaan::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('perusahaan.index', compact('perusahaan'));
    }//end method

    public function create()
    {
        return view('perusahaan.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:255',
            'address'=>'required|max:100',
            'telepon'=>'required|max:13',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('perusahaan.create')->withInput()->withErrors($validasi);
        }

        perusahaan::create($data);
        return redirect()->route('perusahaan.index');
    }//end method

    public function destroy($id)
    {
        $data = perusahaan::findOrFail($id);
        $data->delete();
        return redirect()->route('perusahaan.index');
    }//end method


    public function show($id)
    {
        $perusahaan = perusahaan::findOrFail($id);
        return view('perusahaan.show',compact('perusahaan'));
    }
    public function edit($id)
    {
        $perusahaan = perusahaan::findOrFail($id);
        return view('perusahaan.edit',compact('perusahaan'));
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
    $perusahaan = perusahaan::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
        'name'=>'required|max:255',
        'address'=>'required|max:100',
        'telepon'=>'required|max:13',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('perusahaan.create',[$id])->withErrors($validasi);
        }

      if($request->input('password'))
     {
         $data['password'] = bcrypt($data['password']);
    }
      else
      {
           $data = Arr::except($data,['password']);
      }
       $perusahaan->update($data);
    //    Alert::toast('Berhasil di edit','success');
       return redirect()->route('perusahaan.index');
    }

}
