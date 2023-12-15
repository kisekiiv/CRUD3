<?php

namespace App\Http\Controllers;

use App\Models\ekspektasi;
use App\Http\Requests\StoreekspektasiRequest;
use App\Http\Requests\UpdateekspektasiRequest;
use Illuminate\Http\Request;

class EkspektasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request$request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $dataekspektasi = ekspektasi::where('ekspektasis.id','like','%'.$search.'%')
                ->orWhere('ekspektasis.ekspektasi','like','%'.$search.'%')
                ->orWhere('ekspektasis.definisi','like','%'.$search.'%')
                ->orWhere('ekspektasis.created_at','like','%'.$search.'%')
                ->orWhere('ekspektasis.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $dataekspektasi = ekspektasi::paginate(10)->onEachSide(2)->fragment('std');
        }

        return view('ekspektasi.data')->with([
            'ekspektasi'=>$dataekspektasi,
            'search'=>$search,
            'title'=>' Data ekspektasi'
            
            
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
    public function store(StoreekspektasiRequest $request)
    {
        $validate = $request->validated();
        $ekspektasi = new ekspektasi();
        $ekspektasi->id = $request->txtid;
        $ekspektasi->ekspektasi = $request->txtekspektasi;
        $ekspektasi->definisi = $request->txtdefinisi;
        $ekspektasi->save();

        return redirect('ekspektasi')->with('msg','Input Data Ekspektasi Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ekspektasi::find($id);
        return view('ekspektasi.edit')->with([
            'txtid'=>$id,
            'txtekspektasi'=>$data->ekspektasi,
            'txtdefinisi'=>$data->definisi,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data ekspektasi'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ekspektasi $ekspektasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateekspektasiRequest $request, $id)
    {
        $data = ekspektasi::find($id);
        $data->ekspektasi = $request->txtekspektasi;
        $data->definisi = $request->txtdefinisi;
        $data->save();

        return redirect('ekspektasi')->with('msg','Update Data Ekspektasi "'.$data->ekspektasi.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ekspektasi::find($id);
        $data->delete();

        return redirect('ekspektasi')->with('msg','Data Ekspektasi Klinis "'.$data->ekspektasi.'" Berhasil Dihapus');
    }
}
