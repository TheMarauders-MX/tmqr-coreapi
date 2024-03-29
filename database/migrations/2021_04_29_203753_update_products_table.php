<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('route');
            $table->float('scoring');
            $table->float('old_price')->nullable()->default(null);
            $table->float('current_price');
            $table->dropColumn('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('route');
            $table->dropColumn('scoring');
            $table->dropColumn('old_price');
            $table->dropColumn('current_price');
            $table->float('price');
        });
    }
}
