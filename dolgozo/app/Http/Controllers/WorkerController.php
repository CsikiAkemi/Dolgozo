<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\WorkerController as BaseController;
use App\Models\Dolgozo;


class WorkerController extends Controller
{
    public function toArray ($request){
        return[
        "id"=>$this->id,
        "nev"=>$this->nev,
        "varos"=>$this->varos,
        "szuletes"=>$this->szuletes,
        "fizetes"=>$this->fizetes,
        


        ];
    }
    public function addDolgozo() {
 
        return view( "add_dolgozo" );
    }
 
    
    public function storeDolgozo( Request $request ) {
 
        $dolgozo = new Dolgozo;
     
        $dolgozo->nev = $request->nev;
        $dolgozo->varos = $request->varos;
        $dolgozo->szuletes = $request->szuletes;
        $dolgozo->fizetes = $request->fizetes;
     
        $dolgozo->save();
        $request->session()->flash( "success", "Kiírás sikeres" );
        return redirect( "/uj-dolgozo" );
    }
    
    public function selectDolgozo() {
 
        $dolgozo = Dolgozo::all();
     
        echo "<pre>";
        print_r( $dolgozo );
    }
    
}
