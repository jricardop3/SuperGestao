<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pedidos = Pedido::paginate(5);

        return view('app.pedido.index', ['pedidos'=>$pedidos, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('app.pedido.create',['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'cliente_id' => 'Exists:clientes,id'
        ];
        $feedback = [
            'cliente_id' => 'O clinete informado não existe!'
        ];

        $request->validate($regras, $feedback);

        Pedido::create($request->all());

        return redirect()->route('pedido.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
