<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alat = \App\Alat::all();
        return response()->json(array('alat' => $alat));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alat = new \App\Alat();
        $alat->kode = $request->input('kode');
        $alat->nama = $request->input('nama');
        $alat->biaya = $request->input('biaya');
        $alat->durasi = $request->input('durasi');
        $alat->jumlah_lampiran = $request->input('jumlahLampiran');
        $alat->jenis_alat_id = $request->input('jenis');
        $alat->save();

        return response()->json(array('success' => true, 'message' => 'new user has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alat = \App\Alat::find($id);
        return response()->json(array('alat' => $alat));
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
        $alat = \App\Alat::find($id);

        if ($alat) {
            $alat->kode = $request->input('kode');
            $alat->nama = $request->input('nama');
            $alat->biaya = $request->input('biaya');
            $alat->durasi = $request->input('durasi');
            $alat->jumlah_lampiran = $request->input('jumlahLampiran');
            $alat->jenis_alat_id = $request->input('jenis');
            $alat->save();

            return response()->json(array('success' => true, 'message' => 'alat has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no alat was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alat = \App\Alat::find($id);

        if ($alat) {
            $alat->delete();
            return response()->json(array('success' => true, 'message' => 'alat has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no user was deleted'));
    }
}
