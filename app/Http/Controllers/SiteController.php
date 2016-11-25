<?php

namespace admin\Http\Controllers;

use Admin\Models\Contato;
use Illuminate\Http\Request;

use admin\Http\Requests;
use admin\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.index');
    }

    public function quemSomos()
    {
        return view('site.quemSomos');
    }

    public function cardapio()
    {
        return view('site.cardapio');
    }

    public function localizacao()
    {
        return view('site.localizacao');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function gravarContato(Request $request)
    {
        Contato::create($request->all());

        return view('site.index');
    }

}