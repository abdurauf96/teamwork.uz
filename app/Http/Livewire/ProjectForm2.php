<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProjectForm2 extends Component
{
    public $name;
    public $phone;
    public $message;

    // protected $messages = [
    //     'name.required' => 'The Name cannot be empty.',
    //     'phone.required' => 'The Phone cannot be empty.',
    // ];

    // protected $rules = [
    //     'name' => 'required',
    //     'phone' => 'required',
    // ];

    public function render()
    {
        return view('livewire.project-form2');
    }

    public function sendMessage()
    {
        //$this->validate();
       
        \App\Models\Message::create([
            'name'=>$this->name,
            'phone'=>$this->phone, 
            'message'=>$this->message,
            'type'=>"Loyiha sifatli bo'lishi uchun"
        ]);
        
        $message=<<<TEXT
        Murojat qoldirildi!

        Murojat turi: Loyiha sifatli bo'lishi uchun
        Telefon: {$this->phone}
        Ismi: {$this->name}
        Loyiha haqida: {$this->message}
TEXT;

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001406162739',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        $this->name='';
        $this->phone='';
        $this->message=''; 
    }
}
