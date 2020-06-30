<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'cd_name' => 'Văn Học'
        ];
        $data = [
            'cd_name' => 'Toán Học'
        ];
        $data = [
            'cd_name' => 'Tin Học'
        ];
        $data = [
            'cd_name' => 'Sách Theo Bộ'
        ];
        DB::table('chude')->insert($data);
    }
}
