<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Opini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OpiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'opini' => Opini::all()
        ];
        return view('admin.klanews.Opini.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.klanews.Opini.tambahdata');
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
        try{
            $foto = $request->file('foto');
            $name = time() .rand(1,10000) . '.' . $foto->extension();
            $datafoto =[
                'foto' => $name,
                'judul' => $request->judul,
                'date_create' => $request->date_create,
                'isi' => $request->isi
            ];
            Opini::create($datafoto);
            $foto->move(public_path() . '/storage/photos/opini-img', $name);
            DB::commit();
            return redirect()->route('opini');
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
        $data = Opini::find($id);
        return view('admin.klanews.opini.editdata', compact('data'));
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
        $opini = Opini::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'judul' => 'required',
            'date_create' => 'required',
            'isi' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/opini-img/' . $opini->foto)) {
                    File::delete('storage/photos/opini-img/' . $opini->foto);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/opini-img';
                $request->foto->storeAs($path, $nameFile);
                $opini->foto = $nameFile;
            }
            $opini->judul = $request->judul;
            $opini->date_create = $request->date_create;
            $opini->isi = $request->isi;

            $opini->save();

            DB::commit();
            return redirect()->route('opini');
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
        $data = Opini::find($id);
        if (File::exists('storage/photos/opini-img/' . $data->foto)) {
            File::delete('storage/photos/opini-img/' . $data->foto);
        }
        $data->delete();
        return redirect()->route('opini');
    }
}