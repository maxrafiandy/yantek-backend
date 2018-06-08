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
        $customer = \App\Customer::all();
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
        $customer = new \App\Customer();
        $customer->nomor_irm = $request->input('nomorIrm');
        $customer->alamat = $request->input('alamat');
        $customer->nomor_telepon = $request->input('nomorTelepon');
        $customer->fax = $request->input('fax');
        $customer->email = $request->input('email');
        $customer->contact_person = $request->input('contactPerson');
        $customer->jabatan_cp = $request->input('jabatanCp');
        $customer->kode_provinsi = $request->input('kodeProvinsi');
        $customer->kode_kabupaten = $request->input('kodeKabupaten');
        $customer->jenis_irm = $request->input('jenisIrm');
        $customer->save();

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
        $customer = \App\Customer::find($id);
        return response()->json(array('customer' => $customer));
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
        $customer = \App\Customer::find($id);

        if ($customer) {
            $customer->nomor_irm = $request->input('nomorIrm');
            $customer->alamat = $request->input('alamat');
            $customer->nomor_telepon = $request->input('nomorTelepon');
            $customer->fax = $request->input('fax');
            $customer->email = $request->input('email');
            $customer->contact_person = $request->input('contactPerson');
            $customer->jabatan_cp = $request->input('jabatanCp');
            $customer->kode_provinsi = $request->input('kodeProvinsi');
            $customer->kode_kabupaten = $request->input('kodeKabupaten');
            $customer->jenis_irm_id = $request->input('jenisIrm');
            $customer->penyelenggara_id = $request->input('penyelenggara');
            $customer->save();

            return response()->json(array('success' => true, 'message' => 'customer has been updated'));
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
        $customer = \App\Customer::find($id);

        if ($customer) {
            $customer->delete();
            return response()->json(array('success' => true, 'message' => 'customer has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no customer was deleted'));
    }
}
