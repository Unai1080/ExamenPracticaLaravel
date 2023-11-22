<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Juguetes;

class JuguetesController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

   
    public function catalogo()
    {
        $juguetes = Juguetes::all();
        return view('catalogo', ['juguetes' => $juguetes]);
    }

    public function añadirJuguete(Request $request)
    {
        $izena= $request->input('izena');
        $deskripzioa= $request->input('deskripzioa');
        $stock= $request->input('stock');

        $juguete = new Juguetes();
        $juguete->izena = $izena;
        $juguete->deskripzioa = $deskripzioa;
        $juguete->stock = $stock;
        $juguete->save();

        return $this->catalogo();


    }
    public function vistaAñadirJuguete()
    {
        return view("añadirJuguetes");
    }

    public function delete($id)
    
    {
      Juguetes::destroy($id);
      return $this->catalogo();
    }

    
   
}
