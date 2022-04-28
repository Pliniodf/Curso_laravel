<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();

        if (FacadesAuth::attempt(['email' => $dados['email'], 'password' => $dados['senha']])){
            return redirect()->route('admin.cursos');
        }

        return redirect()->route('login.index');
    }
    public function sair()
    {
        FacadesAuth::logout();
        return redirect()->route('site.home');
    }
}
