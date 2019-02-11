<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'Cesar',
            'last_name' => 'Castro',
            'status' => '1',
            'email' => 'ce.castro@outlook.es',
            'password' => bcrypt('cesar'),
        ]);
    }
}
