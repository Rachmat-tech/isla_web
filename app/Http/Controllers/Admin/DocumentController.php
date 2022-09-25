<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
        try {
            $document = $request->file('document');
            $name = time() . rand(1, 10000) . '.' . $document->extension();
            $datadocument = [
                'document' => $name,
                'nama_document' => $request->nama_document,
                'deskripsi' => $request->desc_document
            ];
            Document::create($datadocument);
            $document->move(public_path() . '/storage/document', $name);
            DB::commit();
            return redirect()->route('document');
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
        //    $request->validate([
        //         'document' => 'file|mimes:pdf',
        //         'nama_document' => 'required',
        //         'deskripsi' => 'required'
        //     ]);

        //     DB::beginTransaction();
        //     try{
        //         $document = $request->file('document');
        //         $name = time() .rand(1,10000) . '.' . $document->extension();
        //         $datadocument = [
        //             'document' => $name,
        //             'nama_document' => $request->nama_document,
        //             'deskripsi' => $request->desc_document
        //         ];
        //         Document::create($datadocument);
        //         $document->move(public_path() . '/storage/document', $name);
        //         // $document->update($request->all());
        //         DB::commit();
        //         return redirect()->route('document');
        //     } catch (Error $e){
        //         DB::rollBack();
        //         dd($e);
        //     }
//batas
        // $doc = Document::findOrFail($id);
        // $request->validate([
        //     'document' => 'file|mimes:pdf',
        //     'nama_document' => 'required',
        //     'desc_document' => 'required'
        // ]);

        // if ($request->file('foto')) {
        //     $file = $request->document('foto')->hashName();
        // } else {
        //     $file = $doc->document;
        // }

        // $document = [
        //     'document' => $file,
        //     'nama_document' => $request->nama_document,
        //     'deskripsi' => $request->desc_document
        // ];

        // DB::beginTransaction();
        // try {
        //     Document::where('id', $doc->id)->update($document);
        //     if ($request->file('document')) {
        //         if (File::exists("storage/document/" . $doc->document)) {
        //             File::delete("storage/document/" . $doc->document);
        //         }
        //         $request->file('document')->move(public_path() . 'storage/document/', $file);
        //     }
        //     DB::commit();
        //     return redirect()->route('document');
        // } catch (Error $e) {
        //     DB::rollBack();
        //     dd($e);
        // }

        //batas
        $doc = Document::findOrFail($id);
        $request->validate([
            'document' => 'file|mimes:pdf',
            'nama_document' => 'required',
            'desc_document' => 'required'
        ]);
        DB::beginTransaction();
        try {
            if ($request->document) {
                if (File::exists('storage/document/' . $doc->document)) {
                    File::delete('storage/document/' . $doc->document);
                }

                $nameFile = time() .  rand(1, 10000) . '.' . $request->file('document')->extension();
                $path = 'public/document';
                $request->document->storeAs($path, $nameFile);
                $doc->document = $nameFile;
            }
            $doc->nama_document = $request->nama_document;
            $doc->deskripsi = $request->desc_document;

            $doc->save();

            DB::commit();
            return redirect()->route('document');
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
        $data = Document::find($id);
        if (File::exists("storage/document/" . $data->document)) {
            File::delete("storage/document/" . $data->document);
        }
        $data->delete();
        return redirect()->route('document');
    }
}