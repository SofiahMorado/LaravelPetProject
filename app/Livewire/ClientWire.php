<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientWire extends Component
{
    public $client_list;

    public function mount()
    {
        $this->client_list = Client::all();
    }

    public function render()
    {
        return view('livewire.Client.client-wire',[
            'client' => $this->client_list
        ]);
    }

    public function delete($id)
    {
        try {
           Client::where('client_id', $id)->delete();
           return $this->redirect('/client',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
}
