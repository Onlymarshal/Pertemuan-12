<?php

namespace App\Http\Controllers;

use App\Models\periksa;
use App\Models\Kelurahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class periksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_periksa = periksa::all();
        return view('periksa.index', ['list_periksa'=>$list_periksa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_kelurahan = Kelurahan::all();
        $periksa = new periksa();
        return view('periksa.form', ['periksa'=>$periksa, 'list_kelurahan'=>$list_kelurahan]);
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
            periksa::find($request->id)->update($request->all());
            return redirect(route('periksa.index'))->with('pesan', 'Data berhasil diupdate');
        }else {
        periksa::create($request->all());
        return redirect(route('periksa.index'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(periksa $periksa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $periksa = periksa::find($id);
        $list_kelurahan = Kelurahan::all();
        return view('periksa.form', ['periksa'=>$periksa, 'list_kelurahan'=>$list_kelurahan]);
    }

    public function view($id)
    {
        $periksa = periksa::find($id);
        return view('periksa.view', ['periksa'=>$periksa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periksa $periksa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        periksa::find($id)->delete();
        return redirect(route('periksa.index'))->with('pesan', 'Data berhasil dihapus');
    }
}