<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\GaleriIsla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GaleriIslaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'galeri' => GaleriIsla::all()
        ];
        return view('admin.alumni.galeriIsla.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.galeriIsla.tambahdata');
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
            'keterangan' => 'required'
        ]);
        DB::beginTransaction();
        try {
            $foto = $request->file('foto');
            $name = time() . rand(1, 10000) . '.' . $foto->extension();
            $datafoto = [
                'foto' => $name,
                'keterangan' => $request->keterangan
            ];
            GaleriIsla::create($datafoto);
            $foto->move(public_path() . '/storage/photos/galeriIsla-img', $name);
            DB::commit();
            return redirect()->route('galeri');
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
        $data = GaleriIsla::find($id);
        return view('admin.alumni.galeriIsla.editdata', compact('data'));
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
        $galeri = GaleriIsla::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'keterangan' => 'required'
        ]);

        if ($request->file('foto')) {
            $foto = $request->file('foto')->hashName();
        } else {
            $foto = $galeri->foto;
        }

        $datagaleri = [
            'foto' => $foto,
            'keterangan' => $request->keterangan
        ];

        DB::beginTransaction();
        try {
            GaleriIsla::where('id', $galeri->id)->update($datagaleri);
            if ($request->file('foto')) {
                if (File::exists("storage/photos/galeriIsla-img/" . $galeri->foto)) {
                    File::delete("storage/photos/galeriIsla-img/" . $galeri->foto);
                }
                $request->file('foto')->move(public_path() . '/storage/photos/galeriIsla-img/', $foto);
            }
            DB::commit();
            return redirect()->route('galeri');
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
        $data = GaleriIsla::find($id);
        if (File::exists("storage/photos/galeriIsla-img/" . $data->foto)) {
            File::delete("storage/photos/galeriIsla-img/" . $data->foto);
        }
        $data->delete();
        return redirect()->route('galeri');
    }
}