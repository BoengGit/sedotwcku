<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "Bajang";
        $user->address = "Jalan kp jembatan";
        $user->telepon = "000000000";
        $user->email = "admin@gmail.com";
        $user->level = "admin";
        $user->password = bcrypt('password');
        $user->save();
        $this->command->info("admin ditambahakan");

        $user = new \App\User;
        $user->name = "Gilang";
        $user->address = "Jalan kp jembatan";
        $user->telepon = "000000000";
        $user->email = "pelanggan@gmail.com";
        $user->level = "pelanggan";
        $user->password = bcrypt('password');
        $user->save();
        $this->command->info("pelanggan ditambahakan");

        $user = new \App\User;
        $user->name = "Serbaguna";
        $user->address = "Jalan kp jembatann";
        $user->telepon = "000000000";
        $user->email = "perusahaan@gmail.com";
        $user->level = "perusahaan";
        $user->password = bcrypt('password');
        $user->save();
        $this->command->info("perusahaan ditambahakan");
    }
}
