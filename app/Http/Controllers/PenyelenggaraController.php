<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyelenggaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyelenggara = \App\Penyelenggara::all();
        return response()->json(array('penyelenggara' => $penyelenggara));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penyelenggara = new \App\Penyelenggara();
        $penyelenggara->nama = $request->input('nama');
        $penyelenggara->keterangan = $request->input('keterangan');
        $penyelenggara->save();

        return response()->json(array('success' => true, 'message' => 'new penyelenggara has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyelenggara = \App\Penyelenggara::find($id);
        return response()->json(array('penyelenggara' => $penyelenggara));
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
        $penyelenggara = \App\Penyelenggara::find($id);

        if ($penyelenggara) {
            $penyelenggara->nama = $request->input('nama');
            $penyelenggara->keterangan = $request->input('keterangan');
            $penyelenggara->save();

            return response()->json(array('success' => true, 'message' => 'penyelenggara has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no penyelenggara was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyelenggara = \App\Penyelenggara::find($id);

        if ($penyelenggara) {
            $penyelenggara->delete();
            return response()->json(array('success' => true, 'message' => 'penyelenggara has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no penyelenggara was deleted'));
    }
}
