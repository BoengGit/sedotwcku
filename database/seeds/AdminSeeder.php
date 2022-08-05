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
        $user->username = "admin";
        $user->email = "admin@gmail.com";
        $user->level = "admin";
        $user->password = \Hash::make("123");
        $user->save();
        $this->command->info("admin ditambahakan");

        $user1 = new \App\User;
        $user1->name = "Gilang";
        $user1->username = "Pelanggan";
        $user1->email = "pelanggan@gmail.com";
        $user1->level = "pelanggan";
        $user1->password = \Hash::make("123");
        $user1->save();
        $this->command->info("pelanggan ditambahakan");

        $user2 = new \App\User;
        $user2->name = "Serbaguna";
        $user2->username = "perusahaan";
        $user2->email = "perusahaan@gmail.com";
        $user2->level = "perusahaan";
        $user2->password = \Hash::make("123");
        $user2->save();
        $this->command->info("perusahaan ditambahakan");
    }
}
