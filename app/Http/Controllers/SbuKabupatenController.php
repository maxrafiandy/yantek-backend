<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SbuKabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $sbuKabupaten = \App\SbuKabupaten::all();
      $query = "select
        kab.*,
        prov.nama AS provinsi
        from sbu_kabupaten kab
        join sbu_provinsi prov on prov.kode = kab.kode_provinsi";

      $sbuKabupaten = \DB::select($query);
      return response()->json(array('sbu_kabupaten' => $sbuKabupaten));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $sbuKabupaten = new \App\SbuKabupaten();
            $sbuKabupaten->kode = $request->input('kode');
            $sbuKabupaten->nama = $request->input('nama');
            // $sbuKabupaten->wilayah_kerja = $request->input('wilayahKerja');
            $sbuKabupaten->transport = $request->input('transport');
            // $sbuKabupaten->penginapan = $request->input('penginapan');
            // $sbuKabupaten->uang_saku = $request->input('uangSaku');
            $sbuKabupaten->penginapan = 0;
            $sbuKabupaten->uang_saku = 0;
            $sbuKabupaten->kode_provinsi = $request->input('kodeProvinsi');
            $sbuKabupaten->save();
        }

        catch(\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => true, 'message' => 'new sbu-kabupaten has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $sbuKabupaten = \App\SbuKabupaten::find($id);
        $query = "select
          kab.*,
          prov.nama AS provinsi
          from sbu_kabupaten kab
          join sbu_provinsi prov on prov.kode = kab.kode_provinsi
          where kab.id = $id";

        $sbuKabupaten = \DB::select($query);
        return response()->json(array('sbu_kabupaten' => collect($sbuKabupaten)->first()));
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
        try {
            $sbuKabupaten = \App\SbuKabupaten::find($id);

            if ($sbuKabupaten) {
                $sbuKabupaten->kode = $request->input('kode');
                $sbuKabupaten->nama = $request->input('nama');
                // $sbuKabupaten->wilayah_kerja = $request->input('wilayahKerja');
                $sbuKabupaten->transport = $request->input('transport');
                // $sbuKabupaten->penginapan = $request->input('penginapan');
                // $sbuKabupaten->uang_saku = $request->input('uangSaku');
                $sbuKabupaten->penginapan = 0;
                $sbuKabupaten->uang_saku = 0;
                $sbuKabupaten->kode_provinsi = $request->input('kodeProvinsi');
                $sbuKabupaten->save();

                return response()->json(array('success' => true, 'message' => 'sbu-kabupaten has been updated'));
            }
        }

        catch(\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-kabupaten was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $sbuKabupaten = \App\SbuKabupaten::find($id);

            if ($sbuKabupaten) {
                $sbuKabupaten->delete();
                return response()->json(array('success' => true, 'message' => 'sbu-kabupaten has been deleted'));
            }
        }

        catch (\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => false, 'message' => 'no sbu-kabupaten was deleted'));
    }
}
