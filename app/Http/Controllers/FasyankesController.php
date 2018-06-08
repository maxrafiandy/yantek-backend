<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasyankesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasyankes = \App\Fasyankes::all();
        return response()->json(array('fasyankes' => $fasyankes));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasyankes = new \App\Fasyankes();
        $fasyankes->nama = $request->input('nama');
        $fasyankes->keterangan = $request->input('keterangan');
        $fasyankes->save();

        return response()->json(array('success' => true, 'message' => 'new fasyankes has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasyankes = \App\Fasyankes::find($id);
        return response()->json(array('fasyankes' => $fasyankes));
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
        $fasyankes = \App\Fasyankes::find($id);

        if ($fasyankes) {
            $fasyankes->nama = $request->input('nama');
            $fasyankes->keterangan = $request->input('keterangan');
            $fasyankes->save();

            return response()->json(array('success' => true, 'message' => 'fasyankes has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no fasyankes was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasyankes = \App\Fasyankes::find($id);

        if ($fasyankes) {
            $fasyankes->delete();
            return response()->json(array('success' => true, 'message' => 'fasyankes has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no fasyankes was deleted'));
    }
}
