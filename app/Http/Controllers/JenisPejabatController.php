<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisPejabat = \App\JenisPejabat::all();
        return response()->json(array('jenis_pejabat' => $jenisPejabat));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisPejabat = new \App\JenisPejabat();
        $jenisPejabat->nama = $request->input('nama');
        $jenisPejabat->keterangan = $request->input('keterangan');
        $jenisPejabat->save();

        return response()->json(array('success' => true, 'message' => 'new jenis-pejabat has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisPejabat = \App\JenisPejabat::find($id);
        return response()->json(array('jenis_pejabat' => $jenisPejabat));
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
        $jenisPejabat = \App\JenisPejabat::find($id);

        if ($jenisPejabat) {
            $jenisPejabat->nama = $request->input('nama');
            $jenisPejabat->keterangan = $request->input('keterangan');
            $jenisPejabat->save();

            return response()->json(array('success' => true, 'message' => 'jenis-pejabat has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-pejabat was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisPejabat = \App\JenisPejabat::find($id);

        if ($jenisPejabat) {
            $jenisPejabat->delete();
            return response()->json(array('success' => true, 'message' => 'jenis-pejabat has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-pejabat was deleted'));
    }
}
