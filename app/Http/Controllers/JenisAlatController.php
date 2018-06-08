<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisAlat = \App\JenisAlat::all();
        return response()->json(array('jenis_alat' => $jenisAlat));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisAlat = new \App\JenisAlat();
        $jenisAlat->nama = $request->input('nama');
        $jenisAlat->keterangan = $request->input('keterangan');
        $jenisAlat->save();

        return response()->json(array('success' => true, 'message' => 'new jenis-alat has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisAlat = \App\JenisAlat::find($id);
        return response()->json(array('jenis_alat' => $jenisAlat));
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
        $jenisAlat = \App\JenisAlat::find($id);

        if ($jenisAlat) {
            $jenisAlat->nama = $request->input('nama');
            $jenisAlat->keterangan = $request->input('keterangan');
            $jenisAlat->save();

            return response()->json(array('success' => true, 'message' => 'jenis-alat has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-alat was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisAlat = \App\JenisAlat::find($id);

        if ($jenisAlat) {
            $jenisAlat->delete();
            return response()->json(array('success' => true, 'message' => 'jenis-alat has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-alat was deleted'));
    }
}
