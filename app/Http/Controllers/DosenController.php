<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    //
    public function index(Request $request){
        return Dosen::all();
    }

    public function show($id){    
        return Dosen::find($id);    
        // return Dosen::where('usia',$id)->get();
        // return Dosen::where('jenis_kelamin', 'pria')->where('usia',19)->get();
    
    }

    public function store(Request $request){    
        Dosen::create($request->all());
    }

    public function update(Request $request, $id){    
        Dosen::find($id)->update($request->all());
    }

    public function destroy($id){    
        Dosen::find($id)->delete();            
    }
}
