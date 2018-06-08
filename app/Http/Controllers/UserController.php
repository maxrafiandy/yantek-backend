<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::all();
        return response()->json(array('user' => $user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new \App\User();
        $user->username = $request->input('userName');
        $user->firstname = $request->input('firstName');
        $user->lastname = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->permission = $request->input('permission');
        $user->save();

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
        $user = \App\User::find($id);
        return response()->json(array('user' => $user));
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
        $user = \App\User::find($id);

        if ($user) {
            // $user->username = $request->input('userName');
            $user->firstname = $request->input('firstName');
            $user->lastname = $request->input('lastName');
            // $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->permission = $request->input('permission');
            $user->save();

            return response()->json(array('success' => true, 'message' => 'user has been updated'));
        }

        return response()->json(array('success' => false, 'message' => 'no user was updated'));
    }

    /**
     * Remove the specified resource from storage.
     *-
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::find($id);

        if ($user) {
            $user->delete();
            return response()->json(array('success' => true, 'message' => 'user has been deleted'));
        }

        return response()->json(array('success' => false, 'message' => 'no user was deleted'));
    }
}
