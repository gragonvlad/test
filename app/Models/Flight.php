<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Flight extends Model
{
    use HasUuids;
    protected $fillable = [
         'link',
         'menu',
         'creation_date',
         'updated_date',
         'options->enabled'
    ];
    use HasFactory;
    protected $table = 'my_flights';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    protected $connection = 'pgsql';

}

$flight = Flight::create(['title' => 'Traveling to Europe']);
$flight = Flight::create([
    'name' => 'London to Paris',
]);
$flight->id; // "8f8e8478-9035-4d23-b9a7-62f4d2612ce5"
