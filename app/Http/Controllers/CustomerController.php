<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query =  "select
            cs.*,
            prov.nama AS provinsi,
            kab.nama AS kabupaten,
            fks.nama AS fasyankes,
            plg.nama AS penyelenggara,
            jp.nama AS jenis_pejabat,
            rs.nama AS kelas_rs,
            case
                when cs.wilayah_kerja_id = 1 then 'Wilayah kerja'
                else 'Diluar wilayah kerja'
            end AS wilayah_kerja
            from customer cs
            join sbu_provinsi prov on prov.kode = cs.kode_provinsi
            join sbu_kabupaten kab on kab.kode = cs.kode_kabupaten
            join fasyankes fks on fks.id = cs.fasyankes_id
            join penyelenggara plg on plg.id = cs.penyelenggara_id
            join jenis_pejabat jp on jp.id = cs.jenis_pejabat_id
            left join kelas_rs rs on rs.id = cs.kelas_rs_id";

        $customer = \DB::select($query);
        return response()->json(array('customer' => $customer));
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
            $customer = new \App\Customer();
            $customer->nomor_irm = $request->input('nomorIrm');
            $customer->instansi = $request->input('instansi');
            $customer->alamat = $request->input('alamat');
            $customer->nomor_telepon = $request->input('nomorTelepon');
            $customer->fax = $request->input('fax');
            $customer->email = $request->input('email');
            $customer->contact_person = $request->input('contactPerson');
            $customer->jabatan_cp = $request->input('jabatanCp');
            $customer->kode_provinsi = $request->input('kodeProvinsi');
            $customer->kode_kabupaten = $request->input('kodeKabupaten');
            $customer->fasyankes_id = $request->input('fasyankesId');
            $customer->kelas_rs_id = $request->input('kelasRsId');
            $customer->penyelenggara_id = $request->input('penyelenggaraId');
            $customer->jenis_pejabat_id = $request->input('jenisPejabatId');
            $customer->wilayah_kerja_id = $request->input('wilayahKerjaId');
            $customer->keterangan = $request->input('keterangan');
            
            $customer->save();
        }

        catch (\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => true, 'message' => 'new customer has been stored'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query =  "select
            cs.*,
            prov.nama AS provinsi,
            kab.nama AS kabupaten,
            fks.nama AS fasyankes,
            plg.nama AS penyelenggara,
            jp.nama AS jenis_pejabat,
            rs.nama AS kelas_rs,
            case
                when cs.wilayah_kerja_id = 1 then 'Wilayah kerja'
                else 'Diluar wilayah kerja'
            end AS wilayah_kerja
            from customer cs
            join sbu_provinsi prov on prov.kode = cs.kode_provinsi
            join sbu_kabupaten kab on kab.kode = cs.kode_kabupaten
            join fasyankes fks on fks.id = cs.fasyankes_id
            join penyelenggara plg on plg.id = cs.penyelenggara_id
            join jenis_pejabat jp on jp.id = cs.jenis_pejabat_id
            left join kelas_rs rs on rs.id = cs.kelas_rs_id
            where cs.id=$id";

        $customer = \DB::select($query);
        return response()->json(array('customer' => collect($customer)->first()));
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
            $customer = \App\Customer::find($id);

            if ($customer) {
                $customer->nomor_irm = $request->input('nomorIrm');
                $customer->instansi = $request->input('instansi');
                $customer->alamat = $request->input('alamat');
                $customer->nomor_telepon = $request->input('nomorTelepon');
                $customer->fax = $request->input('fax');
                $customer->email = $request->input('email');
                $customer->contact_person = $request->input('contactPerson');
                $customer->jabatan_cp = $request->input('jabatanCp');
                $customer->kode_provinsi = $request->input('kodeProvinsi');
                $customer->kode_kabupaten = $request->input('kodeKabupaten');
                $customer->fasyankes_id = $request->input('fasyankesId');
                $customer->kelas_rs_id = $request->input('kelasRsId');
                $customer->penyelenggara_id = $request->input('penyelenggaraId');
                $customer->jenis_pejabat_id = $request->input('jenisPejabatId');
                $customer->wilayah_kerja_id = $request->input('wilayahKerjaId');
                $customer->keterangan = $request->input('keterangan');
                $customer->save();

                return response()->json(array('success' => true, 'message' => 'customer has been updated'));
            }
        }

        catch(\Exeption $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => false, 'message' => 'no customer was updated'));
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
            $customer = \App\Customer::find($id);

            if ($customer) {
                $customer->delete();
                return response()->json(array('success' => true, 'message' => 'customer has been deleted'));
            }
        }

        catch(\Exception $e) {
            return response()->json(array('success' => false, 'message' => $e->getMessage()));
        }

        return response()->json(array('success' => false, 'message' => 'no customer was deleted'));
    }
}
