<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class kelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kelurahan = kelurahan::all();
        return view('kelurahan.index', ['list_kelurahan'=>$list_kelurahan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_kelurahan = Kelurahan::all();
        $kelurahan = new kelurahan();
        return view('kelurahan.form', ['kelurahan'=>$kelurahan, 'list_kelurahan'=>$list_kelurahan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelurahan_id' => 'required',
        ]);

        if($request->id){
            kelurahan::find($request->id)->update($request->all());
            return redirect(route('kelurahan.index'))->with('pesan', 'Data berhasil diupdate');
        }else {
        kelurahan::create($request->all());
        return redirect(route('kelurahan.index'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(kelurahan $kelurahan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelurahan = kelurahan::find($id);
        $list_kelurahan = Kelurahan::all();
        return view('kelurahan.form', ['kelurahan'=>$kelurahan, 'list_kelurahan'=>$list_kelurahan]);
    }

    public function view($id)
    {
        $kelurahan = kelurahan::find($id);
        return view('kelurahan.view', ['kelurahan'=>$kelurahan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelurahan $kelurahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        kelurahan::find($id)->delete();
        return redirect(route('kelurahan.index'))->with('pesan', 'Data berhasil dihapus');
    }
}