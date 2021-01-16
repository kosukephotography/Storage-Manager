<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('maker', 20);
            $table->string('model_number', 30);
            $table->string('serial_number', 30)->unique();
            $table->string('size', 10);
            $table->enum('types', ['レンタル', 'ライブラリ']);
            $table->enum('supported_os', ['Windows', 'mac']);
            $table->string('recovery_key', 48);
            $table->string('password', 48);
            $table->softDeletes();
            $table->text('reason')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storages');
    }
}
