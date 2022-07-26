<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>"locker",
            'price'=>"40",
            'category'=>"Metal",
            'description'=>"a good metal  bed",
            'gallery'=>"https://us.123rf.com/450wm/johnkasawa/johnkasawa1211/johnkasawa121100111/16446472-metal-steel-factory-furniture.jpg?ver=6",
        ]);
    }
}
