<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadetipounidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'unidadetipounidade';

    /**
     * Run the migrations.
     * @table unidadetipounidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDUnidade');
            $table->unsignedBigInteger('IDTipoUnidade');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();


            $table->index(["IDTipoUnidade"], 'fk_Unidade_TipoUnidade_TipoUnidade1_idx');


            $table->foreign('IDTipoUnidade', 'fk_Unidade_TipoUnidade_TipoUnidade1_idx')
                ->references('IDTipoUnidade')->on('tipounidade')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDUnidade', 'unidadetipounidade_IDUnidade')
                ->references('IDUnidade')->on('unidade')
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
