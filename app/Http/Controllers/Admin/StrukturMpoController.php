<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\StrukturMpo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class StrukturMpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'mpo' => StrukturMpo::all()
        ];
        return view('admin.profile.strukturMpo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.strukturMpo.tambahdata');
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
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:51200',
            'nama' => 'required',
            'jabatan' => 'required'
            // 'no_hp' => 'required',
            // 'motto' => 'required'
        ]);
        DB::beginTransaction();
        try {
            $foto = $request->file('foto');
            $name = time() . rand(1, 10000) . '.' . $foto->extension();
            $datafoto = [
                'foto' => $name,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
                // 'no_hp' => $request->no_hp,
                // 'motto' => $request->motto
            ];
            StrukturMpo::create($datafoto);
            $foto->move(public_path() . '/storage/photos/mpo-img', $name);
            DB::commit();
            return redirect()->route('mpo');
        } catch (Error $e) {
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
        $data = StrukturMpo::find($id);
        return view('admin.profile.strukturMpo.editdata', compact('data'));
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
        $mpo = StrukturMpo::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'nama' => 'required',
            'jabatan' => 'required'
            // 'no_hp' => 'required',
            // 'motto' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/mpo-img/' . $mpo->foto)) {
                    File::delete('storage/photos/mpo-img/' . $mpo->foto);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/mpo-img';
                $request->foto->storeAs($path, $nameFile);
                $mpo->foto = $nameFile;
            }
            $mpo->nama = $request->nama;
            $mpo->jabatan = $request->jabatan;
            // $mpo->no_hp = $request->no_hp;
            // $mpo->motto = $request->motto;

            $mpo->save();

            DB::commit();
            return redirect()->route('mpo');
        } catch (Error $e) {
            DB::rollBack();
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = StrukturMpo::find($id);
        if (File::exists('storage/photos/mpo-img/' . $data->foto)) {
            File::delete('storage/photos/mpo-img/' . $data->foto);
        }
        $data->delete();
        return redirect()->route('mpo');
    }
}