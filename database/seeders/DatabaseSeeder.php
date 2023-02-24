<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\cadastro;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $cadastro = new cadastro();
            $cadastro->cpf= 123;//->primary();//intero
            //---------------------------
            $cadastro->foto="url ramdom";//modificar solo ejemplo
            //------------------------
            $cadastro->nome="pepito";//varchar 220
            $cadastro->idade=12;
            $cadastro->resumo="soy el mejor pepito";
            $cadastro->profesao="peitero";

            $cadastro->save();

            $cadastro2 = new cadastro();
            $cadastro2->cpf= 123;//->primary();//intero
            //---------------------------
            $cadastro2->foto="url ramdom";//modificar solo ejemplo
            //------------------------
            $cadastro2->nome="pepito";//varchar 220
            $cadastro2->idade=12;
            $cadastro2->resumo="soy el mejor pepito";
            $cadastro2->profesao="peitero";

            $cadastro2->save();

            $cadastro3 = new cadastro();
            $cadastro3->cpf= 123;//->primary();//intero
            //---------------------------
            $cadastro3->foto="url ramdom";//modificar solo ejemplo
            //------------------------
            $cadastro3->nome="pepito";//varchar 220
            $cadastro3->idade=12;
            $cadastro3->resumo="soy el mejor pepito";
            $cadastro3->profesao="peitero";

            $cadastro3->save();
        }
}
