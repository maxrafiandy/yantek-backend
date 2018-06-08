<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = \App\Petugas::all();
        return response()->json(array('petugas' => $petugas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $petugas = new \App\Petugas();
        $petugas->nip = $request->input('nip');
        $petugas->nama = $request->input('nama');
        $petugas->keterangan = $request->input('keterangan');
        $petugas->save();

        return response()->json(array('success' => true, 'message' => 'new petugas has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = \App\Petugas::find($id);
        return response()->json(array('petugas' => $petugas));
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
        $petugas = \App\Petugas::find($id);

        if ($petugas) {
            $petugas->nip = $request->input('nip');
            $petugas->nama = $request->input('nama');
            $petugas->keterangan = $request->input('keterangan');
            $petugas->save();

            return response()->json(array('success' => true, 'message' => 'petugas has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no petugas was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = \App\Petugas::find($id);

        if ($petugas) {
            $petugas->delete();
            return response()->json(array('success' => true, 'message' => 'petugas has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no petugas was deleted'));
    }
}
