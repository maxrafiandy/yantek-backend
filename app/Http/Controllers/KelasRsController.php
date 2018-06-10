<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasRs = \App\KelasRs::all();
        return response()->json(array('kelas_rs' => $kelasRs));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelasRs = new \App\KelasRs();
        $kelasRs->nama = $request->input('nama');
        $kelasRs->keterangan = $request->input('keterangan');
        $kelasRs->save();

        return response()->json(array('success' => true, 'message' => 'new kelas-rs has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelasRs = \App\KelasRs::find($id);
        return response()->json(array('kelas_rs' => $kelasRs));
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
        $kelasRs = \App\KelasRs::find($id);

        if ($kelasRs) {
            $kelasRs->nama = $request->input('nama');
            $kelasRs->keterangan = $request->input('keterangan');
            $kelasRs->save();

            return response()->json(array('success' => true, 'message' => 'kelas-rs has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no kelas-rs was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelasRs = \App\KelasRs::find($id);

        if ($kelasRs) {
            $kelasRs->delete();
            return response()->json(array('success' => true, 'message' => 'kelas-rs has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no kelas-rs was deleted'));
    }
}
