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
        try {
            $sbuProvinsi = new \App\SbuProvinsi();
            $sbuProvinsi->kode = $request->input('kode');
            $sbuProvinsi->nama = $request->input('nama');
            // $sbuProvinsi->transport = $request->input('transport');
            $sbuProvinsi->transport = 0;
            $sbuProvinsi->penginapan = $request->input('penginapan');
            $sbuProvinsi->uang_saku = $request->input('uangSaku');
            $sbuProvinsi->save();
        }

        catch(\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

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
        try {
            $sbuProvinsi = \App\SbuProvinsi::find($id);

            if ($sbuProvinsi) {
                $sbuProvinsi->kode = $request->input('kode');
                $sbuProvinsi->nama = $request->input('nama');
                // $sbuProvinsi->transport = $request->input('transport');
                $sbuProvinsi->transport = 0;
                $sbuProvinsi->penginapan = $request->input('penginapan');
                $sbuProvinsi->uang_saku = $request->input('uangSaku');
                $sbuProvinsi->save();

                return response()->json(array('success' => true, 'message' => 'sbu-provinsi has been updated'));
            }
        }

        catch(\Exeption $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
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
        try {
            $sbuProvinsi = \App\SbuProvinsi::find($id);

            if ($sbuProvinsi) {
                $sbuProvinsi->delete();
                return response()->json(array('success' => true, 'message' => 'sbu-provinsi has been deleted'));
            }
        }

        catch(\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-provinsi was deleted'));
    }
}
