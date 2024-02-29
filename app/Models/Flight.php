<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
class Flight extends Model
{
    use HasFactory;
   // use SoftDeletes;
    
   
    protected $table = 'flights';
    protected $fillable = [
        'id',
        'link',
        'menu',
        'created_at',
        'updated_at',
        'deleted_at',
        'options->enabled'
   ];
   protected $dates = [
'created_at',
'updated_at',
'deleted_at'
   ];
    protected $primaryKey = 'id';
    protected $appends = [
        'testjson1',
        'testjson2'
    ];
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    protected $connection = 'pgsql';
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id'     => 'required|max:10',
            'link' => 'sometimes|required|max:255|unique:link',
            'menu'    => 'required|menu|max:255|unique:link',
            'creation_at' => 'required|max:255|confirmed',
            'deleted_at' => 'required|max:255|confirmed',
            'terms'    => 'required'
        ]);
    }

    protected function create(array $data)
    {
        return Flight::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}




