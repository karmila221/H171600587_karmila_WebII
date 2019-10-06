<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class BeritaController extends Controller
{
    public function index()
    {
    	$Berita = \App\Berita::all();

    	return view('berita.index',compact('Berita'));    
    }
    
    public function show($id)
    {
    	$Berita = \App\Berita::find($id);

    	return view('berita.show',compact('Berita'));    
    }

    public function create(){

        $KategoriBerita= \App\KategoriBerita::pluck ('nama','id');

        return view('berita.create',compact('KategoriBerita'));
    }
     public function store(Request $request){
        $input=$request->all();
       Berita::create($input);
       return redirect(route('berita.index'));
       
    }
    
}  
