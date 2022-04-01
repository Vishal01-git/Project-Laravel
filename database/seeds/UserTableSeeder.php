<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Vishal Prajapti',
            'email' => 'vishalp712000@gmail.com',
            'password' => bcrypt('12345678'),
            'description' => 'Full Stack Web Developer in MERN, Coding modern and full fledged websites. Proficient with Data Structure and Algorithm in Java. I am very Passionate about my work ,Always open to learn new technology. I always do my work with my full potential and finish the given task in a particular time. You can always expect best result from me.',
        ]);
    }
}
