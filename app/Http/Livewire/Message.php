<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $name;
    public $message;
    public $phone;
    public $email;

    public function render()
    {
        return view('livewire.message');
    }

    // protected $messages = [
    //     'name.required' => 'The Name cannot be empty.',
    //     'phone.required' => 'The Phone number cannot be empty.',
    // ];

    // protected $rules = [
    //     'name' => 'required',
    //     'phone' => 'required',
    // ];

    public function sendMessage()
    {
        //$this->validate();
        
        \App\Models\Message::create(['name'=>$this->name, 'phone'=>$this->phone]);
        $message=<<<TEXT
        Murojat qoldirildi!

        Telefon: {$this->phone}
        Ismi: {$this->name}
TEXT;

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001406162739',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        $this->name='';
        $this->phone='';
    }

}
