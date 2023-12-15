<?php

namespace App\Http\Controllers;

use App\Models\kriteriaHasil;
use App\Http\Requests\StorekriteriaHasilRequest;
use App\Http\Requests\UpdatekriteriaHasilRequest;
use Illuminate\Http\Request;

class KriteriaHasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $datakriteriaHasil = kriteriaHasil::where('kriteria_hasils.id','like','%'.$search.'%')
                ->orWhere('kriteria_hasils.kriteria_hasil','like','%'.$search.'%')
                ->orWhere('kriteria_hasils.kode_kelompok_kriteria','like','%'.$search.'%')
                ->orWhere('kriteria_hasils.created_at','like','%'.$search.'%')
                ->orWhere('kriteria_hasils.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $datakriteriaHasil = kriteriaHasil::paginate(10)->onEachSide(2)->fragment('std');
        }
        return view('kriteria_hasil.data')->with([
            'kriteriaHasil'=>$datakriteriaHasil,
            'search'=>$search,
            'title'=>' Data Kriteria Hasil'    
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
    public function store(StorekriteriaHasilRequest $request)
    {
        $validate = $request->validated();
        $kriteriaHasil = new kriteriaHasil();
        $kriteriaHasil->id = $request->txtid;
        $kriteriaHasil->kriteria_hasil = $request->txtkriteria;
        $kriteriaHasil->kode_kelompok_kriteria = $request->txtkode;
        $kriteriaHasil->save();

        return redirect('kriteriaHasil')->with('msg','Input Data Kriteria Hasil Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = kriteriaHasil::find($id);
        return view('kriteria_hasil.edit')->with([
            'txtid'=>$id,
            'txtkriteria'=>$data->kriteria_hasil,
            'txtkode'=>$data->kode_kelompok_kriteria,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data Kriteria Hasil'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kriteriaHasil $kriteriaHasil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekriteriaHasilRequest $request, $id)
    {
        $data = kriteriaHasil::find($id);
        $data->	kriteria_hasil = $request->txtkriteria;
        $data->kode_kelompok_kriteria = $request->txtkode;
        $data->save();

        return redirect('kriteriaHasil')->with('msg','Update Data Kriteria Hasil "'.$data->kriteria_hasil.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = kriteriaHasil::find($id);
        $data->delete();

        return redirect('kriteriaHasil')->with('msg','Data Kriteria Hasil "'.$data->kriteria_hasil.'" Berhasil Dihapus');
    }
}
