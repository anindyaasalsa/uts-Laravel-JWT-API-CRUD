<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id', 200);
            $table->string('nama', 200);
            $table->string('merk', 50);
            $table->string('bahan_bakar',50);
            $table->string('plat_nomer',50); 
            $table->string('warna',50);
            $table->integer('jumlah');  
            $table->timestamps();                               
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}

