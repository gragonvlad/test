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
    protected $table = 'flights';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    protected $connection = 'pgsql';

}



