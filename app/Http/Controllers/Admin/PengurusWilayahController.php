<?php

namespace App\Http\Controllers\Admin;

use Error;
use Illuminate\Http\Request;
use App\Models\PengurusWilayah;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PengurusWilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'wilayah' => PengurusWilayah::all()
        ];
        return view('admin.profile.pengurusWilayah.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.pengurusWilayah.tambahdata');
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
                'foto' => $name,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'no_hp' => $request->no_hp,
                'motto' => $request->motto
            ];
            PengurusWilayah::create($datafoto);
            $foto->move(public_path() . '/storage/photos/pengurusWilayah-img', $name);
            DB::commit();
            return redirect()->route('pengurus');
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
        $data = PengurusWilayah::find($id);
        return view('admin.profile.pengurusWilayah.editdata', compact('data'));
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
        $pengurus = PengurusWilayah::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'nama' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'motto' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/pengurusWilayah-img/' . $pengurus->foto)) {
                    File::delete('storage/photos/pengurusWilayah-img/' . $pengurus->foto);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/pengurusWilayah-img';
                $request->foto->storeAs($path, $nameFile);
                $pengurus->foto = $nameFile;
            }
            $pengurus->nama = $request->nama;
            $pengurus->jabatan = $request->jabatan;
            $pengurus->no_hp = $request->no_hp;
            $pengurus->motto = $request->motto;

            $pengurus->save();

            DB::commit();
            return redirect()->route('pengurus');
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
        $data = PengurusWilayah::find($id);
        if (File::exists('storage/photos/pengurusWilayah-img/' . $data->foto)) {
            File::delete('storage/photos/pengurusWilayah-img/' . $data->foto);
        }
        $data->delete();
        return redirect()->route('pengurus');
    }
}