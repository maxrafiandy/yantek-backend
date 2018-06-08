<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SbuProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sbuProvinsi = \App\SbuProvinsi::all();
        return response()->json(array('sbu_provinsi' => $sbuProvinsi));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sbuProvinsi = new \App\SbuProvinsi();
        $sbuProvinsi->kode = $request->input('kode');
        $sbuProvinsi->nama = $request->input('nama');
        $sbuProvinsi->wilayah_kerja = $request->input('wilayahKerja');
        $sbuProvinsi->transport = $request->input('transport');
        $sbuProvinsi->penginapan = $request->input('penginapan');
        $sbuProvinsi->uang_saku = $request->input('uangSaku');
        $sbuProvinsi->save();

        return response()->json(array('success' => true, 'message' => 'new sbu-provinsi has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sbuProvinsi = \App\SbuProvinsi::find($id);
        return response()->json(array('sbu_provinsi' => $sbuProvinsi));
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
        $sbuProvinsi = \App\SbuKabupaten::find($id);

        if ($sbuProvinsi) {
            $sbuProvinsi = new \App\SbuProvinsi();
            $sbuProvinsi->kode = $request->input('kode');
            $sbuProvinsi->nama = $request->input('nama');
            $sbuProvinsi->wilayah_kerja = $request->input('wilayahKerja');
            $sbuProvinsi->transport = $request->input('transport');
            $sbuProvinsi->penginapan = $request->input('penginapan');
            $sbuProvinsi->uang_saku = $request->input('uangSaku');
            $sbuProvinsi->save();

            return response()->json(array('success' => true, 'message' => 'sbu-provinsi has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-provinsi was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sbuProvinsi = \App\SbuProvinsi::find($id);

        if ($sbuProvinsi) {
            $sbuProvinsi->delete();
            return response()->json(array('success' => true, 'message' => 'sbu-provinsi has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-provinsi was deleted'));
    }
}
