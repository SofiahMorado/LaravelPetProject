<?php

namespace App\Livewire\Pet;

use App\Models\Pet;
use Livewire\Component;

class PetWire extends Component
{
    public $pet_list;
    public function mount()
    {
        $this->pet_list = Pet::with('client')->get();
        
    }

    public function render()
    {
        return view('livewire.pet.pet-wire', [
            'pet' => $this->pet_list
        ]);
    }

    public function delete($id)
    {
        try {
           Pet::where('pet_id', $id)->delete();
           return $this->redirect('/pet',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
}
