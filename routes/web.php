<?php

use App\Livewire\AddClient;
use App\Livewire\ClientWire;
use App\Livewire\EditClient;
use App\Livewire\Main;
use App\Livewire\Pet\AddPet;
use App\Livewire\Pet\EditPet;
use App\Livewire\Pet\PetWire;
use Illuminate\Support\Facades\Route;

//Landing Page
Route::get('/', Main::class);

//Client Route
Route::get('/client', ClientWire::class);
Route::get('/client/add/client', AddClient::class);
Route::get('/client/edit/{id}', EditClient::class);

// Pet 
Route::get('/pet', PetWire::class);
Route::get('/pet/add/pet', AddPet::class);
Route::get('/pet/edit/{id}', EditPet::class);