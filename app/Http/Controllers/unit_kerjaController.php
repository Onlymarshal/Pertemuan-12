<?php

namespace App\Http\Controllers;

use App\Models\unit_kerja;
use App\Models\Kelurahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class unit_kerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unit_kerja = unit_kerja::all();
        return view('unit_kerja.index', ['list_unit_kerja'=>$list_unit_kerja]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_kelurahan = Kelurahan::all();
        $unit_kerja = new unit_kerja();
        return view('unit_kerja.form', ['unit_kerja'=>$unit_kerja, 'list_kelurahan'=>$list_kelurahan]);
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
            unit_kerja::find($request->id)->update($request->all());
            return redirect(route('unit_kerja.index'))->with('pesan', 'Data berhasil diupdate');
        }else {
        unit_kerja::create($request->all());
        return redirect(route('unit_kerja.index'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(unit_kerja $unit_kerja)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit_kerja = unit_kerja::find($id);
        $list_kelurahan = Kelurahan::all();
        return view('unit_kerja.form', ['unit_kerja'=>$unit_kerja, 'list_kelurahan'=>$list_kelurahan]);
    }

    public function view($id)
    {
        $unit_kerja = unit_kerja::find($id);
        return view('unit_kerja.view', ['unit_kerja'=>$unit_kerja]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        unit_kerja::find($id)->delete();
        return redirect(route('unit_kerja.index'))->with('pesan', 'Data berhasil dihapus');
    }
}