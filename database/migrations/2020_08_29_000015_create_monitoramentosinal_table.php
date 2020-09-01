<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitoramentosinalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'monitoramentosinal';

    /**
     * Run the migrations.
     * @table monitoramentosinal
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('IDMonitoramento');
            $table->unsignedBigInteger('IDSinal');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDSinal"], 'fk_Monitoramento_Sinal_Sinal1_idx');

            $table->index(["IDMonitoramento"], 'fk_Monitoramento_Sinal_Monitoramento1_idx');


            $table->foreign('IDMonitoramento', 'monitoramentosinal_IDMonitoramento')
                ->references('IDMonitoramento')->on('monitoramento')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDSinal', 'fk_Monitoramento_Sinal_Sinal1_idx')
                ->references('IDSinal')->on('sinal')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
