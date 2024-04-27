<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index (Request $request)
    {
        $erro = '';
        if($request->get('erro')== 1){
            $erro = 'Usuario ou senha invalido!';
        }
        if($request->get('erro')== 2){
            $erro = 'Faça o login novamente!';
        }
        return view('site.login', ['erro' => $erro]);
    }


    public function autenticar (Request $request)
    {
        $regras = [
            'usuario' =>'email',
            'senha' => 'required'
        ];
        $feedback = [
            'usuario.email' =>'O E-Mail digitado é invalido!',
            'senha.required' => 'Por favor, digite sua senha!'
        ];
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $senha = $request->get('senha');
        echo "$email $senha";
        $user = new User();

        $usuario = $user->where('email', $email)-> where('password', $senha)->get()->first();
        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            return redirect(route('app.home'));
        }else {
            return redirect()-> route('site.login');
        }
        

        //return ("'Chegamos até aqui'");
    }
    public function sair ()
    {
        session_destroy();
        return redirect(route('site.login'));
    }
}
