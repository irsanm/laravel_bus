<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\supir;

class supirController extends Controller
{
    public function index(){
        $supir = supir::All();
        $data = array(
            'title'         => 'Jadwal supir',
            'supir'  		=> $supir,
            'no'            => 1
        );
        return view('supir.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Jadwal supir');
        return view('supir.create',$data);
    }
    public function store(){
        supir::create([
            'nama'					=> request('nama'),
            'alamat'				=> request('alamat'),
            'tlp'					=> request('tlp')
         
        ]);
        return redirect('/supir');
    }
    public function edit(supir $supir){
        $data = array(
            'title'   => 'edit data',
            'supir' => $supir
        );
        return view('supir.edit',$data);
    }
    public function update(supir $supir)
    {   
        $supir->update([
            'nama'					=> request('nama'),
            'alamat'				=> request('alamat'),
            'tlp'					=> request('tlp')
        ]);
        return redirect('/supir');
    }
    public function destroy(supir $supir){
        $supir->delete();
        return redirect()->route('supir.index');
    }
}
