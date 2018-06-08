<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisLayanan = \App\JenisLayanan::all();
        return response()->json(array('jenis_layanan' => $jenisLayanan));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisLayanan = new \App\JenisLayanan();
        $jenisLayanan->nama = $request->input('nama');
        $jenisLayanan->keterangan = $request->input('keterangan');
        $jenisLayanan->save();

        return response()->json(array('success' => true, 'message' => 'new jenis-layanan has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisLayanan = \App\JenisLayanan::find($id);
        return response()->json(array('jenis_layanan' => $jenisLayanan));
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
        $jenisLayanan = \App\JenisLayanan::find($id);

        if ($jenisLayanan) {
            $jenisLayanan->nama = $request->input('nama');
            $jenisLayanan->keterangan = $request->input('keterangan');
            $jenisLayanan->save();

            return response()->json(array('success' => true, 'message' => 'jenis-layanan has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-layanan was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisLayanan = \App\JenisLayanan::find($id);

        if ($jenisLayanan) {
            $jenisLayanan->delete();
            return response()->json(array('success' => true, 'message' => 'jenis-layanan has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-layanan was deleted'));
    }
}
