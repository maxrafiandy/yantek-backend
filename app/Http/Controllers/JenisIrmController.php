<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisIrmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisIrm = \App\JenisIrm::all();
        return response()->json(array('jenis_irm' => $jenisIrm));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisIrm = new \App\JenisIrm();
        $jenisIrm->nama = $request->input('nama');
        $jenisIrm->keterangan = $request->input('keterangan');
        $jenisIrm->save();

        return response()->json(array('success' => true, 'message' => 'new jenis-irm has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisIrm = \App\JenisIrm::find($id);
        return response()->json(array('jenis_irm' => $jenisIrm));
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
        $jenisIrm = \App\JenisIrm::find($id);

        if ($jenisIrm) {
            $jenisIrm->nama = $request->input('nama');
            $jenisIrm->keterangan = $request->input('keterangan');
            $jenisIrm->save();

            return response()->json(array('success' => true, 'message' => 'jenis-irm has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-irm was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisIrm = \App\jenisIrm::find($id);

        if ($jenisIrm) {
            $jenisIrm->delete();
            return response()->json(array('success' => true, 'message' => 'jenis-irm has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no jenis-irm was deleted'));
    }
}
