<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mengendarai;
use App\supir;
use App\bus;

use DB;

class mengendaraiController extends Controller
{
     public function index()
    {
        $mengendarais = mengendarai::All();
        // return $mengendarais;
        $mengendarais = DB::table('mengendarais')
            ->join('supirs', 'supirs.id', '=', 'mengendarais.supir_id')
            ->join('buses', 'buses.id', '=', 'mengendarais.bus_id')
            ->get();
            
        $data = array(

            'title' => 'index',
            'no'    => 1,
            'mengendarais'  => $mengendarais
        );
        return view('mengendarai.index',$data);
    }
    public function create()
    {
        // $mengendarais = mengendarai::All();
        $supirs     = supir::All();
        $buses   	= bus::All();

        $data = array(
            'supirs'     => $supirs,
            'buses'		 => $buses
        );
        return view('mengendarai.create',$data);
    }
    public function store()
    {
     mengendarai::create([
         'supir_id'      => request('supir_id'),
         'bus_id'   => request('bus_id'),
         'tujuan'   => request('tujuan'),
         'tempat'   => request('tempat'),
         'harga'   => request('harga'),
         'waktu'   => request('waktu'),
     ]);
     return redirect('/mengendarai');
    }
}
