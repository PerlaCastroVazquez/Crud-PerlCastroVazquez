<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{
    
    public function index()
    {
        $poet = DB::table('poets')
        ->orderBy('idPoet')
        ->get();

        return view('Crud.showPoets', [
            'poets' => $poet
        ]);
    }

    public function create()
    {
        return view('Crud.altaPoets');
    }

    public function store(Request $request)
    {
        $poet = DB::table('poets')
        ->insert([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'address' => $request->input('address'),
            'postCode' => $request->input('postCode'),
            'telephoneNumber' => $request->input('telephoneNumber')
        ]);
        return redirect()->action('Crud@index')
        ->with('status','Poeta Ingresado Exitosamente');
    }

    public function show($id)
    {
        $poet = DB::table('poets')
        ->where('idPoet', '=', $id)
        ->first();
        return view('crud.altaPoets', ['poet'=> $poet]);
    }

    public function update(Request $request)
    {
        $poet = DB::table('poets')
        ->where('idPoet', '=',  $request->input('id'))
        ->update([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'address' => $request->input('address'),
            'postCode' => $request->input('postCode'),
            'telephoneNumber' => $request->input('telephoneNumber')
        ]);

        return redirect()->action('Crud@index')
            ->with('status','Poeta Modificado Exitosamente');
    }

    public function destroy($id)
    {
        $poet = DB::table('poets')
        ->where('idPoet', '=',  $id)
        ->delete();

    return redirect()->action('Crud@index')
        ->with('status','Poeta Eliminado Exitosamente');
    }
}

