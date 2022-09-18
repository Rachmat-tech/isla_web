<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\AlumniAward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AlumniAwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'alumni' => AlumniAward::all()
        ];
        return view('admin.alumni.alumniaward.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.alumniaward.tambahdata');
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
            AlumniAward::create($datafoto);
            $foto->move(public_path() . '/storage/photos/alumniaward-img', $name);
            DB::commit();
            return redirect()->route('alumni');
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
        $data = AlumniAward::find($id);
        return view('admin.alumni.alumniaward.editdata', compact('data'));
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
        $alumni = AlumniAward::findOrFail($id);
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg|max:51200',
            'keterangan' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->foto) {
                if (File::exists('storage/photos/alumniaward-img/' . $alumni->foto)) {
                    File::delete('storage/photos/alumniaward-img/' . $alumni->foto);
                }

                $namaFile = time() . rand(1, 10000) . '.' . $request->file('foto')->extension();
                $path = 'public/photos/alumniaward-img';
                $request->foto->storeAs($path, $namaFile);
                $alumni->foto = $namaFile;
            }

            $alumni->keterangan = $request->keterangan;

            $alumni->save();

            DB::commit();
            return redirect()->route('alumni');
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
        $data = AlumniAward::find($id);
        if (File::exists('storage/photos/alumniaward-img/' . $data->foto)) {
            File::delete('storage/photos/alumniaward-img/' . $data->foto);
        }
        $data->delete();
        return redirect()->route('alumni');
    }
}