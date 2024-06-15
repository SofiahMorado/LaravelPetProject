<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class AddClient extends Component
{
    public $firstname;
    public $lastname;
    public $contact;
    public $address;
    public $gender;
    public $middlename;
    public $client_status;

    public $client_list;

    public function newClient()
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
            $this->client_list = Client::where('firstname', $this->firstname)
                                    ->where('lastname', $this->lastname)
                                    ->first();

            if($this->client_list != null)
            {
                session()->flash('error', 'Client already exist in the List');
            }
            else
            {   
                $new_client = new Client;
                $new_client->firstname = $this->firstname;
                $new_client->middlename = $this->middlename;
                $new_client->lastname = $this->lastname;
                $new_client->contact = $this->contact;
                $new_client->address = $this->address;
                $new_client->gender = $this->gender;
                $new_client->client_status = $this->client_status;
                $new_client->save();

                 return $this->redirect('/client',navigate:true);
            }


        } catch (\Exception $e) {
             dd($e);
        }
    }

    public function render()
    {
        return view('livewire.Client.add-client');
    }
}
