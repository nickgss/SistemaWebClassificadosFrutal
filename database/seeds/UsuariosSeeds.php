<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('email','=','gedersilv@gmail.com')->count()){
            $usuario = User::where('email','=','gedersilv@gmail.com')->first();      
            
            $usuario->name ="Geder Severino";
            $usuario->email ="gedersilv@gmail.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();   
        }
        else
        {
            $usuario = new User();
            $usuario->name ="Geder Severino";
            $usuario->email ="gedersilv@gmail.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }
    }
}
