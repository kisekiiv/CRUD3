<?php

namespace App\Http\Controllers;

use App\Models\diagnosa;
use App\Http\Requests\StorediagnosaRequest;
use App\Http\Requests\UpdatediagnosaRequest;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $datadiagnosa = diagnosa::where('diagnosas.id','like','%'.$search.'%')
                ->orWhere('diagnosas.nama_diagnosa','like','%'.$search.'%')
                ->orWhere('diagnosas.kode_diagnosa','like','%'.$search.'%')
                ->orWhere('diagnosas.definisi','like','%'.$search.'%')
                ->orWhere('diagnosas.user','like','%'.$search.'%')
                ->orWhere('diagnosas.created_at','like','%'.$search.'%')
                ->orWhere('diagnosas.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $datadiagnosa = diagnosa::paginate(10)->onEachSide(2)->fragment('std');
        }

        return view('diagnosa.data')->with([
            'diagnosa'=>$datadiagnosa,
            'search'=>$search,
            'title'=>' Data Diagnosa'
            
            
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
    public function store(StorediagnosaRequest $request)
    {
        $validate = $request->validated();
        $diagnosa = new diagnosa;
        $diagnosa->id = $request->txtid;
        $diagnosa->kode_diagnosa = $request->txtkode;
        $diagnosa->nama_diagnosa = $request->txtnama;
        $diagnosa->definisi = $request->txtdefinisi;
        $diagnosa->user = $request->txtuser;
        $diagnosa->save();

        return redirect('diagnosa')->with('msg','Input Data Diagnosa Berhasil');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $data = diagnosa::find($id);
        return view('diagnosa.edit')->with([
            'txtid'=>$id,
            'txtkode'=>$data->kode_diagnosa,
            'txtnama'=>$data->nama_diagnosa,
            'txtdefinisi'=>$data->definisi,
            'txtuser'=>$data->user,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data Diagnosa'
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(diagnosa $diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatediagnosaRequest $request,$id)
    {
        $data = diagnosa::find($id);
        $data->kode_diagnosa = $request->txtkode;
        $data->nama_diagnosa = $request->txtnama;
        $data->definisi = $request->txtdefinisi;
        $data->user = $request->txtuser;
        $data->save();

        return redirect('diagnosa')->with('msg','Update Data Diagnosa "'.$data->nama_diagnosa.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = diagnosa::find($id);
        $data->delete();

        return redirect('diagnosa')->with('msg','Data Diagnosa "'.$data->nama_diagnosa.'" Berhasil Dihapus');
    }
}
