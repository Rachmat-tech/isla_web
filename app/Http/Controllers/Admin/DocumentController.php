<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'document' => Document::all()
        ];
        return view('admin.document.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.document.tambahdata');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf',
            'nama_document' => 'required',
            'desc_document' => 'required'
        ]);
        DB::beginTransaction();
        try{
            $document = $request->file('document');
            $name = time() .rand(1,10000) . '.' . $document->extension();
            $datadocument = [
                'document' => $name,
                'nama_document' => $request->nama_document,
                'deskripsi' => $request->desc_document
            ];
            Document::create($datadocument);
            $document->move(public_path() . '/storage/document', $name);
            DB::commit();
            return redirect()->route('document');
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
        $data = [
            'document' => Document::find($id)
        ];
        return view('admin.document.editdata', $data);
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
        $request->validate([
            'document' => 'required|file|mimes:pdf',
            'nama_document' => 'required',
            'desc_document' => 'required'
        ]);
        DB::beginTransaction();
        try{
            $document = $request->file('document');
            $name = time() .rand(1,10000) . '.' . $document->extension();
            $datadocument = [
                'document' => $name,
                'nama_document' => $request->nama_document,
                'deskripsi' => $request->desc_document
            ];
            Document::create($datadocument);
            $document->move(public_path() . '/storage/document', $name);
            DB::commit();
            return redirect()->route('document');
        } catch (Error $e){
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
        $data = Document::find($id);
        $data->delete();
        return redirect()->route('document');
    }
}