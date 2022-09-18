<?php

namespace App\Http\Controllers\Admin;

use Error;
use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'struktur' => StrukturOrganisasi::all()
        ];
        return view('admin.profile.strukturOrganisasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.strukturOrganisasi.tambahdata');
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
        try {
            $foto = $request->file('foto');
            $name = time() . rand(1, 10000) . '.' . $foto->extension();
            $datafoto = [
                'foto' => $name
            ];
            StrukturOrganisasi::create($datafoto);
            $foto->move(public_path() . '/storage/photos/strukturOrganisasi-img', $name);
            DB::commit();
            return redirect()->route('struktur');
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
        $data = StrukturOrganisasi::find($id);
        return view('admin.profile.strukturOrganisasi.editdata', compact('data'));
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
        $struktur = StrukturOrganisasi::findOrFail($id);
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:51200'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/strukturOrganisasi-img/' . $struktur->foto)) {
                    File::delete('storage/photos/strukturOrganisasi-img/' . $struktur->foto);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/strukturOrganisasi-img';
                $request->foto->storeAs($path, $nameFile);
                $struktur->foto = $nameFile;
            }
            // $pengurus->nama = $request->nama;
            // $pengurus->jabatan = $request->jabatan;
            // $pengurus->no_hp = $request->no_hp;
            // $pengurus->motto = $request->motto;

            $struktur->save();

            DB::commit();
            return redirect()->route('struktur');
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
        $data = StrukturOrganisasi::find($id);
        if (File::exists('storage/photos/strukturOrganisasi-img/' . $data->foto)) {
            File::delete('storage/photos/strukturOrganisasi-img/' . $data->foto);
        }
        $data->delete();
        return redirect()->route('struktur')->with('success', 'data berhasil di hapus');
    }
}