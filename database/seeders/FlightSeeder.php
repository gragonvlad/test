<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;


class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
        'id' => '1',
        'menu' => 'Start',
        'link' => 'http://www.ya.ru',
        'id' => '2',
        'menu' => 'Register',
        'link' => 'http://www.google.com',
        ]);
    }
}
