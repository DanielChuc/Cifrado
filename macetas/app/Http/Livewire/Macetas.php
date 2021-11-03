<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;

class Macetas extends Component
{
    use WithFileUploads;

    public $name,$description,$color,$quantity,$material,$file;
    public function store()
    {      


        $file = $this->file->store('ModelsP');

        $this->validate(
            [
                'name' => 'required|min:3',
                'description'=> 'required|min:5',
                'color'=> 'required',
                'quantity'=> 'min:1|max:100',
                'material'=> 'required',
                'file' => 'required'
            ]
        );
        $id = Auth::user()->id;
        
        \App\Models\Maceta::create([

            'name'=> $this->name,
            'file'=> $this->file,
            'description'=> $this->description,
            'color'=> $this->color,
            'quantity'=> $this->quantity,
            'material'=> $this->material,
            'status' => "enviado",
            
            'user_id'=> $this->id,

        ]); 
    }       
    public function render()
    {
        return view('livewire.macetas');
    }
}
