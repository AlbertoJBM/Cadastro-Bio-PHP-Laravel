<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //

        Schema::create('cadastros',function(Blueprint $table){
            $table->id();
            $table->integer('cpf');//->primary();//intero
            //---------------------------
            $table->string('foto');//modificar solo ejemplo
            //------------------------
            $table->string('nome');//varchar 220
            $table->smallInteger('idade');
            $table->text('resumo');
            $table->string('profesao');
                     //$table->string('email')->unique();
                    //$table->timestamp('email_verified_at')->nullable();


            $table->timestamps();//guarda cuando se creo y cuando se modifico
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
            Schema::dropIfExists('cadastros');
        //
    }
};
