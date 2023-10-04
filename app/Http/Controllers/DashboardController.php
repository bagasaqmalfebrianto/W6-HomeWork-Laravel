<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('dashboard.index',[
            'title'=>'Dashboard'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $dashboard)
    {
        //

        return view('dashboard.edit',[
            'user'=>$dashboard
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $dashboard)
    {
        //

        $rules = [
            'name'=>'required|max:255',
            'no_telp'=>'required',
            'alamat'=>'required',
            'password'=>'required'
        ];

        if($request->email != $dashboard->email){
            $rules['email']='required|unique:users';
        }

        $validatedData = $request->validate($rules);


        User::where('id',$dashboard->id)->update($validatedData);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function saldo()
    {
        $user = Auth::user();
        $saldo = $user->saldo;

        return view('dashboard.index', compact('saldo'));
    }
}
