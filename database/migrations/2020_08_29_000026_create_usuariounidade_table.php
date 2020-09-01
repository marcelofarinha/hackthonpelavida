<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariounidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuariounidade';

    /**
     * Run the migrations.
     * @table usuariounidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDUnidade');
            $table->unsignedBigInteger('IDUser');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDUnidade"], 'fk_Usuario_Unidade_Unidade1_idx');

            $table->index(["IDUser"], 'fk_usuariounidade_users1_idx');


            $table->foreign('IDUnidade', 'fk_Usuario_Unidade_Unidade1_idx')
                ->references('IDUnidade')->on('unidade')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDUser', 'fk_usuariounidade_users1_idx')
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
