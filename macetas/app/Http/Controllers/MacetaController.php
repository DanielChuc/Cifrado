<?php

namespace App\Http\Controllers;

use App\Models\Maceta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MacetaController extends Controller
{
    public function index()
    {
        $id = Auth()->user()->id;
        $query = DB::table('macetas')->where('user_id', $id)->get();
        $query2 = DB::table('macetas')->where('user_id', $id)->get();
        $query3 = DB::table('macetas')->where('user_id', $id)->get();

        //$query = \App\Models\Maceta::all();
        return view('forms.maceta', compact('query', 'query2', 'query3'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'file' => 'required',
            'description' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            'material' => 'required',
        ]);
        /* 'file' => 'required|mimes:stl,obj,fbx,skp,gltf,glb,usd', */



        $maceta = new Maceta();
        $maceta->name = md5($request->input("name"));
        $maceta->description = sha1($request->input("description"));
        $maceta->comment = hash('tiger192,3' ,$request->input("comment")) ;

        $maceta->color = $request->input("color");
        $maceta->quantity = $request->input("quantity");
        $maceta->material = $request->input("material");
        $maceta->status = "enviado";
        $maceta->user_id = Auth()->user()->id;
        $maceta->uuid = (string) Str::uuid();

        /*  $maceta->file = $request->input("file");  */

        if ($request->hasFile('file')) {
            /* $maceta->file = time().'_'.$request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('folder_Models',$maceta->file); */

            $maceta->file = time().'_'.$request->file('file')->getClientOriginalName();
            $request->file('file')
            ->storeAs('Model_Folder/'.auth()->user()->id.'_'.auth()->user()->name,$maceta->file);
        }

        $maceta->save();

        return redirect()->route('macetas.index');

    }
}
