<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = \App\Jabatan::all();
        return response()->json(array('jabatan' => $jabatan));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jabatan = new \App\Jabatan();
        $jabatan->nama = $request->input('nama');
        $jabatan->keterangan = $request->input('keterangan');
        $jabatan->save();

        return response()->json(array('success' => true, 'message' => 'new jabatan has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = \App\Jabatan::find($id);
        return response()->json(array('jabatan' => $jabatan));
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
        $jabatan = \App\Jabatan::find($id);

        if ($jabatan) {
            $jabatan->nama = $request->input('nama');
            $jabatan->keterangan = $request->input('keterangan');
            $jabatan->save();

            return response()->json(array('success' => true, 'message' => 'jabatan has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no jabatan was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = \App\Jabatan::find($id);

        if ($jabatan) {
            $jabatan->delete();
            return response()->json(array('success' => true, 'message' => 'jabatan has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no jabatan was deleted'));
    }
}
