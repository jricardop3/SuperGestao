<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\Principal;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motivo_contatos = MotivoContato::all();
        dd($motivo_contatos);

        return view('site.principal', ['motivo_contatos'=>$motivo_contatos]); 
    
        
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
    public function show(Principal $principal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Principal $principal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Principal $principal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Principal $principal)
    {
        //
    }
}
