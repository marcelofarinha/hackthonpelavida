<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoramentoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'monitoramento';

    /**
     * Run the migrations.
     * @table monitoramento
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDMonitoramento');
            $table->unsignedBigInteger('IDPaciente');
            $table->unsignedBigInteger('IDUser');
            $table->dateTime('InicioMonitoramento')->nullable()->default(null);
            $table->dateTime('FimMonitoramento')->nullable()->default(null);
            $table->date('Data')->nullable()->default(null);
            $table->string('EmIsolamento', 1)->nullable()->default(null);
            $table->string('Orientacao', 10)->nullable()->default(null);
            $table->string('Apetite', 10)->nullable()->default(null);
            $table->integer('Febre')->nullable()->default(null);
            $table->integer('Tosse')->nullable()->default(null);
            $table->integer('FaltaDeAr')->nullable()->default(null);
            $table->string('Conduta', 20)->nullable()->default(null);
            $table->string('ObsGeral')->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDPaciente"], 'fk_Monitoramento_Paciente1_idx');

            $table->index(["IDUser"], 'fk_monitoramento_users1_idx');


            $table->foreign('IDPaciente', 'fk_Monitoramento_Paciente1_idx')
                ->references('IDPaciente')->on('paciente')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDUser', 'fk_monitoramento_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
