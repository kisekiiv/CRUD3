<?php

namespace App\Http\Controllers;

use App\Models\penyebab;
use App\Http\Requests\StorepenyebabRequest;
use App\Http\Requests\UpdatepenyebabRequest;
use Illuminate\Http\Request;

class PenyebabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $datapenyebab = penyebab::where('penyebabs.id','like','%'.$search.'%')
                ->orWhere('penyebabs.penyebab','like','%'.$search.'%')
                ->orWhere('penyebabs.created_at','like','%'.$search.'%')
                ->orWhere('penyebabs.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $datapenyebab = penyebab::paginate(10)->onEachSide(2)->fragment('std');
        }

        return view('penyebab.data')->with([
            'penyebab'=>$datapenyebab,
            'search'=>$search,
            'title'=>' Data Penyebab'
            
            
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
    public function store(StorepenyebabRequest $request)
    {
        $validate = $request->validated();
        $penyebab = new penyebab();
        $penyebab->id = $request->txtid;
        $penyebab->penyebab = $request->txtpenyebab;
        $penyebab->save();

        return redirect('penyebab')->with('msg','Input Data Penyebab Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = penyebab::find($id);
        return view('penyebab.edit')->with([
            'txtid'=>$id,
            'txtpenyebab'=>$data->penyebab,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data penyebab'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penyebab $penyebab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepenyebabRequest $request,$id)
    {
   
        $data = penyebab::find($id);
        $data->penyebab = $request->txtpenyebab;
        $data->save();

        return redirect('penyebab')->with('msg','Update Data Penyebab "'.$data->penyebab.'" Berhasil');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = penyebab::find($id);
        $data->delete();

        return redirect('penyebab')->with('msg','Data Penyebab "'.$data->penyebab.'" Berhasil Dihapus');
    }
}
