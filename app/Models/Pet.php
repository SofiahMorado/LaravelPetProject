<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'client_id',
        'pet_name',
        'breed',
        'color',
        'birthday',
        'gender',
        'weight',
        'species',
        // Add other fields as needed
    ];
    protected $table = "pet";
    public $timestamps = false;
    protected $primaryKey = "pet_id";
    protected $foreignKey = "client_id";

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }
}
