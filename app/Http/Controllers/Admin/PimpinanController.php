<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Pimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pimpinan' => Pimpinan::all()
        ];
        return view('admin.profile.pimpinan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.pimpinan.tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:51200'
        ]);
        DB::beginTransaction();
        try{
            $foto = $request->file('foto');
            $name = time() .rand(1,10000) . '.' . $foto->extension();
            $datafoto = [
                'foto' => $name,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'no_hp' => $request->no_hp,
                'motto' => $request->motto
            ];
            Pimpinan::create($datafoto);
            $foto->move(public_path() . '/storage/photos/pimpinan-img', $name);
            DB::commit();
            return redirect()->route('pimpinan');
        } catch (Error $e){
            DB::rollBack();
            dd($e);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pimpinan::find($id);
        return view('admin.profile.pimpinan.editdata', compact('data'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pimpinan::find($id);
        $data->delete();
        return redirect()->route('pimpinan');
    }
}