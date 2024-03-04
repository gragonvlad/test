<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BlogPost extends Model
{
  use SoftDeletes;
    use HasFactory;
    protected $table = 'flights';
    protected $fillable = [
        'id',
        'link',
        'menu',
        'created_at',
        'updated_at',
        'express_time',
        'options->enabled',
   ];
   protected $dates = [
'express_time',
   ];
    protected $primaryKey = 'id';
    protected $appends = [
    ];
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'express_time';
    protected $connection = 'pgsql';
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id'     => 'required|max:10',
            'link' => 'sometimes|required|max:255|unique:link',
            'menu'    => 'required|menu|max:255|unique:link',
            'creation_at' => 'required|max:255|confirmed',
            'express_time' => 'required|max:255|confirmed',
            'terms'    => 'required',
        ]);
    }
    public function posts()
    {
        
        return $this->hasMany(BlogPost::class);
    }
    static public function authors()
    {
        return BlogPost::withTrashed()->get();
    }

   static public function blogs() {
        return BlogPost::all()->find(1);
    }
    protected function create(array $data)
    {
        return BlogPost::create([
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
