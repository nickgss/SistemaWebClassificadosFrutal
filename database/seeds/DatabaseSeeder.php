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
        // $this->call(UsersTableSeeder::class); UsuariosSeeds
        $this->call(UsuariosSeeds::class);
        $this->call(PaginasSeeds::class);
        $this->call(PapelSeeds::class);
        $this->call(PermissaoSeeds::class);
    }
}
