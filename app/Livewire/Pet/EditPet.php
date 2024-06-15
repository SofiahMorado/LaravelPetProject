<?php

namespace App\Livewire\Pet;

use App\Models\Client;
use App\Models\Pet;
use Livewire\Component;

class EditPet extends Component
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

    public $pet_data;

    public function mount($id)
    {
        $this->pet_data = Pet::where('pet_id', $id)->first();

        if($this->pet_data != null)
        {
                $this->pet_name = $this->pet_data->pet_name;
                $this->breed = $this->pet_data->breed;
                $this->color = $this->pet_data->color;
                $this->birthday = $this->pet_data->birthday;
                $this->gender = $this->pet_data->gender;
                $this->weight = $this->pet_data->weight;
                $this->species = $this->pet_data->species;
                $this->client_id = $this->pet_data->client_id;
        }
        else
        {
            session()->flash('error', 'Pet is not found or No Pet found');
        }

        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.pet.edit-pet', [
            'clients' => $this->clients
        ]);
    }

    public function update()
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
            $this->pet_data->pet_name = $this->pet_name;
            $this->pet_data->breed = $this->breed;
            $this->pet_data->color = $this->color;
            $this->pet_data->birthday = $this->birthday;
            $this->pet_data->gender = $this->gender;
            $this->pet_data->weight = $this->weight;
            $this->pet_data->species = $this->species;
            $this->pet_data->client_id = $this->client_id;
            $this->pet_data->update();

            return $this->redirect('/pet',navigate:true);

    } catch (\Exception $th) {
        dd($th);
    }
    }
}
