<?php

namespace Database\Seeders;

use App\Models\Urls;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;


class UrlsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		Urls::factory()->count(5)->create();
		/**static $idss = [
		'1',
		'2'
		];
		static $menuu = [
		'Start',
		'Register'
		];
		static $linkk = [
		'http://www.ya.ru',
		'http://www.google.com'
		];
          foreach (self::$idss as $ids, self:$menuu as $menu, self:$linkk as $link) {
            DB::table('flight')->insert([
                'id' => $ids,
                'menu' => $menu,
				'link' => $link
            ]);

    });*/
    }
}
