<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Http\Requests\StoregejalaRequest;
use App\Http\Requests\UpdategejalaRequest;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $datagejala = gejala::where('gejalas.id','like','%'.$search.'%')
                ->orWhere('gejalas.gejala','like','%'.$search.'%')
                ->orWhere('gejalas.jenis_subjektif','like','%'.$search.'%')
                ->orWhere('gejalas.jenis_objektif','like','%'.$search.'%')
                ->orWhere('gejalas.kode_loinc','like','%'.$search.'%')
                ->orWhere('gejalas.created_at','like','%'.$search.'%')
                ->orWhere('gejalas.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $datagejala = gejala::paginate(10)->onEachSide(2)->fragment('std');
        }

        return view('gejala.data')->with([
            'gejala'=>$datagejala,
            'search'=>$search,
            'title'=>' Data Gejala'
            
            
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
    public function store(StoregejalaRequest $request)
    {
        $validate = $request->validated();
        $gejala = new gejala;
        $gejala->id = $request->txtid;
        $gejala->gejala = $request->txtgejala;
        $gejala->jenis_subjektif = $request->txtsubjek;
        $gejala->jenis_objektif = $request->txtobjek;
        $gejala->kode_loinc = $request->txtloinc;
        $gejala->save();

        return redirect('gejala')->with('msg','Input Data Gejala Berhasil');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = gejala::find($id);
        return view('gejala.edit')->with([
            'txtid'=>$id,
            'txtgejala'=>$data->gejala,
            'txtsubjek'=>$data->jenis_subjektif,
            'txtobjek'=>$data->jenis_objektif,
            'txtloinc'=>$data->kode_loinc,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data Gejala'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gejala $gejala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategejalaRequest $request,$id)
    {
        $data = gejala::find($id);
        $data->gejala = $request->txtgejala;
        $data->jenis_subjektif = $request->txtsubjek;
        $data->jenis_objektif = $request->txtobjek;
        $data->kode_loinc = $request->txtloinc;
        $data->save();

        return redirect('gejala')->with('msg','Update Data Gejala "'.$data->gejala.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = gejala::find($id);
        $data->delete();

        return redirect('gejala')->with('msg','Data Gejala "'.$data->gejala.'" Berhasil Dihapus');
    }
}
