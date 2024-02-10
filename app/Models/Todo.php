<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'newtable';
    protected $primaryKey = 'id';
    protected $fillable = ['menu', 'link'];
    protected $casts = ["id" => "string"];
}
