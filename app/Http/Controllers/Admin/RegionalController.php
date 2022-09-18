<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Regional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'regional' => Regional::all()
        ];
        return view('admin.proker.regional.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proker.regional.tambahdata');
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
            Regional::create($datafoto);
            $foto->move(public_path() . '/storage/photos/regional-img', $name);
            DB::commit();
            return redirect()->route('regional');
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
        $data = Regional::find($id);
        return view('admin.proker.regional.editdata', compact('data'));
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
        $data = Regional::find($id);
        $data->delete();
        return redirect()->route('regional');
    }
}