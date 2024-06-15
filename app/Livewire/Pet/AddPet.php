<?php

namespace App\Livewire\Pet;

use App\Models\Client;
use App\Models\Pet;
use Livewire\Component;

class AddPet extends Component
{

    public $clients;

    public $pet_name;
    public $breed;
    public $color;
    public $birthday;
    public $gender;
    public $weight;
    public $species;
    public $client_id;

    public function mount()
    {
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.pet.add-pet', [
            'clients' => $this->clients
        ]);
    }

    public function addPet()
    {
        $this->validate([
            'pet_name' => 'required',
            'breed' => 'required',
            'color' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'species' => 'required',
            'client_id' => 'required|exists:client,client_id',
        ]);

        try {
                $new_pet = new Pet;
                $new_pet->pet_name = $this->pet_name;
                $new_pet->breed = $this->breed;
                $new_pet->color = $this->color;
                $new_pet->birthday = $this->birthday;
                $new_pet->gender = $this->gender;
                $new_pet->weight = $this->weight;
                $new_pet->species = $this->species;
                $new_pet->client_id = $this->client_id;
                $new_pet->save();

                return $this->redirect('/pet',navigate:true);

        } catch (\Exception $th) {
            dd($th);
        }
    }
}
