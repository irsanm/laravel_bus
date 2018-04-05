<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\bus;

class busController extends Controller
{
    public function index(){
        $bus = bus::All();
        $data = array(
            'title'     => 'Jadwal Bus',
            'bus'  		=> $bus,
            'no'        => 1
        );
        return view('bus.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Jadwal BUS');
        return view('bus.create',$data);
    }
    public function store(){
        bus::create([
            'merek'				=> request('merek'),
            'tahun'				=> request('tahun'),
            'warna'				=> request('warna'),
            'plat'				=> request('plat')
        ]);
        return redirect('/bus');
    }
    public function edit(bus $bus){
        $data = array(
            'title'   => 'edit data',
            'bus' => $bus
        );
        return view('bus.edit',$data);
    }
    public function update(bus $bus)
    {   
        $bus->update([
            'merek'				=> request('merek'),
            'tahun'				=> request('tahun'),
            'warna'				=> request('warna'),
            'plat'				=> request('plat')
        ]);
        return redirect('/bus');
    }
    public function destroy(bus $bus){
        $bus->delete();
        return redirect()->route('bus.index');
    }
}
