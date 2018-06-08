<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SbuKabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sbuKabupaten = \App\SbuKabupaten::all();
      return response()->json(array('sbu_kabupaten' => $sbuKabupaten));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sbuKabupaten = new \App\SbuKabupaten();
        $sbuKabupaten->kode = $request->input('kode');
        $sbuKabupaten->nama = $request->input('nama');
        $sbuKabupaten->wilayah_kerja = $request->input('wilayahKerja');
        $sbuKabupaten->transport = $request->input('transport');
        $sbuKabupaten->penginapan = $request->input('penginapan');
        $sbuKabupaten->uang_saku = $request->input('uangSaku');
        $sbuKabupaten->kode_provinsi = $request->input('kodeProvinsi');
        $sbuKabupaten->save();

        return response()->json(array('success' => true, 'message' => 'new sbu-kabupaten has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sbuKabupaten = \App\SbuKabupaten::find($id);
        return response()->json(array('sbu_kabupaten' => $sbuKabupaten));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sbuKabupaten = \App\SbuKabupaten::find($id);

        if ($sbuKabupaten) {
            $sbuKabupaten->kode = $request->input('kode');
            $sbuKabupaten->nama = $request->input('nama');
            $sbuKabupaten->wilayah_kerja = $request->input('wilayahKerja');
            $sbuKabupaten->transport = $request->input('transport');
            $sbuKabupaten->penginapan = $request->input('penginapan');
            $sbuKabupaten->uang_saku = $request->input('uangSaku');
            $sbuKabupaten->kode_provinsi = $request->input('kodeProvinsi');
            $sbuKabupaten->save();

            return response()->json(array('success' => true, 'message' => 'sbu-kabupaten has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-kabupaten was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sbuKabupaten = \App\SbuKabupaten::find($id);

        if ($sbuKabupaten) {
            $sbuKabupaten->delete();
            return response()->json(array('success' => true, 'message' => 'sbu-kabupaten has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-kabupaten was deleted'));
    }
}
