<?php

namespace App\Http\Controllers;

use App\Models\paramedik;
use App\Models\Kelurahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class paramedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_paramedik = paramedik::all();
        return view('paramedik.index', ['list_paramedik'=>$list_paramedik]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_kelurahan = Kelurahan::all();
        $paramedik = new paramedik();
        return view('paramedik.form', ['paramedik'=>$paramedik, 'list_kelurahan'=>$list_kelurahan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required',
            'kelurahan_id' => 'required',
        ]);

        if($request->id){
            paramedik::find($request->id)->update($request->all());
            return redirect(route('paramedik.index'))->with('pesan', 'Data berhasil diupdate');
        }else {
        paramedik::create($request->all());
        return redirect(route('paramedik.index'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(paramedik $paramedik)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paramedik = paramedik::find($id);
        $list_kelurahan = Kelurahan::all();
        return view('paramedik.form', ['paramedik'=>$paramedik, 'list_kelurahan'=>$list_kelurahan]);
    }

    public function view($id)
    {
        $paramedik = paramedik::find($id);
        return view('paramedik.view', ['paramedik'=>$paramedik]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paramedik $paramedik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        paramedik::find($id)->delete();
        return redirect(route('paramedik.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
