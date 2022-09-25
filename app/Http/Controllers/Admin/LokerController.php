<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'loker' => Loker::all()
        ];
        return view('admin.klanews.loker.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.klanews.loker.tambahdata');
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
            'kategori' => 'required',
            'perusahaan' => 'required',
            'waktu_pendaftaran' => 'required',
            'url' => 'required',
            'isi' => 'required'
        ]);
        DB::beginTransaction();
        try{
            $foto = $request->file('foto');
            $name = time() .rand(1,10000) . '.' . $foto->extension();
            $datafoto =[
                'foto' => $name,
                'kategori' => $request->kategori,
                'perusahaan' => $request->perusahaan,
                'waktu_pendaftaran' => $request->waktu_pendaftaran,
                'url' => $request->url,
                'isi' => $request->isi
            ];
            Loker::create($datafoto);
            $foto->move(public_path() . '/storage/photos/loker-img', $name);
            DB::commit();
            return redirect()->route('loker');
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
        $data = Loker::find($id);
        return view('admin.klanews.loker.editdata', compact('data'));
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
        $loker = Loker::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'kategori' => 'required',
            'perusahaan' => 'required',
            'waktu_pendaftaran' => 'required',
            'url' => 'required',
            'isi' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/loker-img/' . $loker->foto)) {
                    File::delete('storage/photos/loker-img/' . $loker->foto);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/loker-img';
                $request->foto->storeAs($path, $nameFile);
                $loker->foto = $nameFile;
            }
            $loker->kategori = $request->kategori;
            $loker->perusahaan = $request->perusahaan;
            $loker->waktu_pendaftaran = $request->waktu_pendaftaran;
            $loker->url = $request->url;
            $loker->isi = $request->isi;

            $loker->save();

            DB::commit();
            return redirect()->route('loker');
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
        $data = Loker::find($id);
        if (File::exists('storage/photos/loker-img/' . $data->foto)) {
            File::delete('storage/photos/loker-img/' . $data->foto);
        }
        $data->delete();
        return redirect()->route('loker');
    }
}