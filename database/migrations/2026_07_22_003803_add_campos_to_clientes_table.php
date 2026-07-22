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
        Schema::table('clientes', function (Blueprint $table) {

            $table->string('nome')->after('id');

            $table->string('cpf', 14)->unique()->after('nome');

            $table->string('email')->unique()->after('cpf');

            $table->string('telefone', 20)->nullable()->after('email');

            $table->string('endereco')->nullable()->after('telefone');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {

            $table->dropColumn([
                'nome',
                'cpf',
                'email',
                'telefone',
                'endereco'
            ]);

        });
    }
};
