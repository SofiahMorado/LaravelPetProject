<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'firstname',
        'lastname',
        'contact',
        'address',
        'gender',
        'middlename',
        'client_status',
        // Add other fields as needed
    ];
    protected $table = "client";
    public $timestamps = false;
    protected $primaryKey = "client_id";
   

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class, 'client_id', 'client_id');
    }
}
