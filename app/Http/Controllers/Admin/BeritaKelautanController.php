<?php

namespace App\Http\Controllers\Admin;

use Error;

use App\Models\BeritaKelautan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BeritaKelautanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'berita' => BeritaKelautan::all()
        ];
        return view('admin.klanews.beritaKelautan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.klanews.beritaKelautan.tambahdata');
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
            'judul' => 'required',
            'date_create' => 'required',
            'isi' => 'required'
        ]);
        DB::beginTransaction();
        try {
            $foto = $request->file('foto');
            $name = time() . rand(1, 10000) . '.' . $foto->extension();
            $datafoto = [
                'foto' => $name,
                'judul' => $request->judul,
                'date_create' => $request->date_create,
                'isi' => $request->isi
            ];
            BeritaKelautan::create($datafoto);
            $foto->move(public_path() . '/storage/photos/beritaKelautan-img', $name);
            DB::commit();
            return redirect()->route('berita');
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
        $data = BeritaKelautan::find($id);
        return view('admin.klanews.beritaKelautan.editdata', compact('data'));
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
        $berita = BeritaKelautan::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'judul' => 'required',
            'date_create' => 'required',
            'isi' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/beritaKelautan-img/' . $berita->foto)) {
                    File::delete('storage/photos/beritaKelautan-img/' . $berita->foto);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/beritaKelautan-img';
                $request->foto->storeAs($path, $nameFile);
                $berita->foto = $nameFile;
            }
            $berita->judul = $request->judul;
            $berita->date_create = $request->date_create;
            $berita->isi = $request->isi;

            $berita->save();

            DB::commit();
            return redirect()->route('berita');
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
        $data = BeritaKelautan::find($id);
        if (File::exists('storage/photos/beritaKelautan-img/' . $data->foto)) {
            File::delete('storage/photos/beritaKelautan-img/' . $data->foto);
            }
        $data->delete();
        return redirect()->route('berita');
    }
}