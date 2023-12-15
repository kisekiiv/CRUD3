<?php

namespace App\Http\Controllers;

use App\Models\kondisiKlinis;
use App\Http\Requests\StorekondisiKlinisRequest;
use App\Http\Requests\UpdatekondisiKlinisRequest;
use Illuminate\Http\Request;

class KondisiKlinisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $datakondisiKlinis = kondisiKlinis::where('kondisi_klinis.id','like','%'.$search.'%')
                ->orWhere('kondisi_klinis.kondisi','like','%'.$search.'%')
                ->orWhere('kondisi_klinis.kode_icd10','like','%'.$search.'%')
                ->orWhere('kondisi_klinis.created_at','like','%'.$search.'%')
                ->orWhere('kondisi_klinis.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $datakondisiKlinis = kondisiKlinis::paginate(10)->onEachSide(2)->fragment('std');
        }
        return view('kondisi_klinis.data')->with([
            'kondisiKlinis'=>$datakondisiKlinis,
            'search'=>$search,
            'title'=>' Data Kondisi Klinis'    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekondisiKlinisRequest $request)
    {
        $validate = $request->validated();
        $kondisiKlinis = new kondisiKlinis();
        $kondisiKlinis->id = $request->txtid;
        $kondisiKlinis->kondisi = $request->txtkondisi;
        $kondisiKlinis->kode_icd10 = $request->txtkode;
        $kondisiKlinis->save();

        return redirect('kondisiKlinis')->with('msg','Input Data Kondisi Klinis Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = kondisiKlinis::find($id);
        return view('kondisi_klinis.edit')->with([
            'txtid'=>$id,
            'txtkondisi'=>$data->kondisi,
            'txtkode'=>$data->kode_icd10,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data Kondisi Klinis'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kondisiKlinis $kondisiKlinis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekondisiKlinisRequest $request, $id)
    {
        $data = kondisiKlinis::find($id);
            $data->kondisiKlinis = $request->txtkondisiKlinis;
            $data->kode_icd10 = $request->txtkode;
            $data->save();
    
            return redirect('kondisiKlinis')->with('msg','Update Data Kondisi Klinis "'.$data->kondisi.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = kondisiKlinis::find($id);
        $data->delete();

        return redirect('kondisiKlinis')->with('msg','Data Kondisi Klinis "'.$data->kondisi.'" Berhasil Dihapus');
    }
}
