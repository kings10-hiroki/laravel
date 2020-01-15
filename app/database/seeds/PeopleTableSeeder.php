<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@gmail.com',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@gmail.com',
            'age' => 30,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'keiko',
            'mail' => 'keiko@gmail.com',
            'age' => 50,
        ];
        DB::table('people')->insert($param);
    }
}
