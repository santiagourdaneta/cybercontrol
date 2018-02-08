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
        
    
        
        $this->call(UserSeed::class);
        $this->command->info('Ya puede ingresar al proyecto usando las credenciales-> Admin email: admin@admin.com, Password: password');

    }
}
