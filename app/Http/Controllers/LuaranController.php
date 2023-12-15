<?php

namespace App\Http\Controllers;

use App\Models\luaran;
use App\Http\Requests\StoreluaranRequest;
use App\Http\Requests\UpdateluaranRequest;
use Illuminate\Http\Request;

class LuaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)){
            $dataluaran = luaran::where('luarans.id','like','%'.$search.'%')
                ->orWhere('luarans.luaran','like','%'.$search.'%')
                ->orWhere('luarans.definisi','like','%'.$search.'%')
                ->orWhere('luarans.ekspektasi_id','like','%'.$search.'%')
                ->orWhere('luarans.created_at','like','%'.$search.'%')
                ->orWhere('luarans.updated_at','like','%'.$search.'%')
                ->paginate(5)->onEachSide(2)->fragment('std');
        }
        else{
            $dataluaran = luaran::paginate(10)->onEachSide(2)->fragment('std');
        }

        return view('luaran.data')->with([
            'luaran'=>$dataluaran,
            'search'=>$search,
            'title'=>' Data Luaran'
            
            
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
    public function store(StoreluaranRequest $request)
    {
        $validate = $request->validated();
        $luaran = new luaran();
        $luaran->id = $request->txtid;
        $luaran->luaran = $request->txtluaran;
        $luaran->definisi = $request->txtdefinisi;
        $luaran->ekspektasi_id = $request->txtekspekID;
        $luaran->save();

        return redirect('luaran')->with('msg','Input Data Luaran Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = luaran::find($id);
        return view('luaran.edit')->with([
            'txtid'=>$id,
            'txtluaran'=>$data->luaran,
            'txtdefinisi'=>$data->definisi,
            'txtekspekID'=>$data->ekspektasi_id,
            'txtdibuat'=>$data->created_at,
            'txtupdate'=>$data->updated_at,
            'title'=>'Edit Data luaran'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(luaran $luaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateluaranRequest $request, $id)
    {
        $data = luaran::find($id);
        $data->luaran = $request->txtluaran;
        $data->definisi = $request->txtdefinisi;
        $data->ekspektasi_id = $request->txtekspekID;
        $data->save();

        return redirect('luaran')->with('msg','Update Data luaran "'.$data->luaran.'" Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = luaran::find($id);
        $data->delete();

        return redirect('luaran')->with('msg','Data Luaran Klinis "'.$data->luaran.'" Berhasil Dihapus');
    }
}
