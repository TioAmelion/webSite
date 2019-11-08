<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.layout');
    }

     public function gestao_documental()
    {
        return view('site.servicos.gestao_documental');
    }

    public function auditoria()
    {
        return view('site.servicos.auditoria');
    }

    public function bpm()
    {
        return view('site.servicos.bpm');
    }
}
