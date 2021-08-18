<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title' => 'PhimHD+ - PhimHD Online',
            'keywords' => 'phimhd online, phimhd moi nhat, phimhd+, phimhd mien phi',
            'descriptions' => 'PhimHD online cập nhật mới nhất',
            'vip' => 99
        ]);

        $this->call(UserTableSeeder::class);
    }
}

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        $sql = file_get_contents(database_path() . '/seeds/donates.sql');
    
         DB::statement($sql);

        //  $path = './seeds/donates.sql';
        //  DB::unprepared(file_get_contents($path));
      }
}
