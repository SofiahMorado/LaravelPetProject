<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class EditClient extends Component
{

    public $client_data;

    public $firstname;
    public $lastname;
    public $contact;
    public $address;
    public $gender;
    public $middlename;
    public $client_status;

    public function mount($id)
    {
        $this->client_data = Client::where('client_Id', $id)->first();

        if($this->client_data != null)
        {
            $this->firstname = $this->client_data->firstname;
            $this->middlename = $this->client_data->middlename;
            $this->lastname = $this->client_data->lastname;
            $this->contact = $this->client_data->contact;
            $this->address = $this->client_data->address;
            $this->gender = $this->client_data->gender;
            $this->client_status = $this->client_data->client_status;
        }
        else
        {
          session()->flash('error', 'Client is not found or No client found');
        }
        
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'client_status' => 'required',
        ]);
      
        try {
            // Edit the data
            $this->client_data->firstname = $this->firstname;
            $this->client_data->middlename = $this->middlename;
            $this->client_data->lastname = $this->lastname;
            $this->client_data->contact = $this->contact;
            $this->client_data->address = $this->address;
            $this->client_data->gender = $this->gender;
            $this->client_data->client_status = $this->client_status;

            $this->client_data->update();
            return $this->redirect('/client',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }

    public function render()
    {
        return view('livewire.Client.edit-client');
    }
}
