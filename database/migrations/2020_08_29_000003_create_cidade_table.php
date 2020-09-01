<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cidade';

    /**
     * Run the migrations.
     * @table cidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDCidade');
            $table->unsignedBigInteger('IDEstado');
            $table->string('Nome', 200);
            $table->string('CodigoIBGE', 50);
            $table->string('DDD', 2);
            $table->string('CEPGeral', 8)->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDEstado"], 'fk_Cidade_Estado1_idx');


            $table->foreign('IDEstado', 'fk_Cidade_Estado1_idx')
                ->references('IDEstado')->on('estado')
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
