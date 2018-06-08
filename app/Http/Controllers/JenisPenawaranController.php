<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisPenawaran = \App\JenisPenawaran::all();
        return response()->json(array('jenis_penawaran' => $jenisPenawaran));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisPenawaran = new \App\JenisPenawaran();
        $jenisPenawaran->nama = $request->input('nama');
        $jenisPenawaran->keterangan = $request->input('keterangan');
        $jenisPenawaran->save();

        return response()->json(array('success' => true, 'message' => 'new jenis-penawaran has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisPenawaran = \App\JenisPenawaran::find($id);
        return response()->json(array('jenis_penawaran' => $jenisPenawaran));
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
        $jenisPenawaran = \App\JenisPenawaran::find($id);

        if ($jenisPenawaran) {
            $jenisPenawaran->nama = $request->input('nama');
            $jenisPenawaran->keterangan = $request->input('keterangan');
            $jenisPenawaran->save();

            return response()->json(array('success' => true, 'message' => 'jenis-penawaran has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-penawaran was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisPenawaran = \App\JenisPenawaran::find($id);

        if ($jenisPenawaran) {
            $jenisPenawaran->delete();
            return response()->json(array('success' => true, 'message' => 'jenis-penawaran has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-penawaran was deleted'));
    }
}
