<?php

namespace App\Http\Controllers;
use App\Models\Maceta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MacetaController extends Controller
{
    public function index()
    {
        $id = Auth()->user()->id;
        $query = DB::table('macetas')->where('user_id', $id)->get();
        $query2 = DB::table('macetas')->where('user_id', $id)->get();
        $query3 = DB::table('macetas')->where('user_id', $id)->get();

        //$query = \App\Models\Maceta::all();
        return view('forms.maceta',compact('query','query2','query3'));
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
        $request->file('file')->store('ModelsP');
        $maceta = new Maceta();
        $maceta->name =md5($request->input("name"));
        $maceta->file = $request->input("file");
        $maceta->description = sha1($request->input("description")) ;
        $maceta->color = $request->input("color");
        $maceta->quantity = $request->input("quantity");
        $maceta->material = $request->input("material");
        $maceta->status = "enviado";
        $maceta->user_id = Auth()->user()->id;
        $maceta->save();

        return redirect()->route('macetas.index');

    }
}
