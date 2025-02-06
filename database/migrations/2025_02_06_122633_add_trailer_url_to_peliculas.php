<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->string('trailer_url')->nullable()->after('id_isrc');
        });
    }

    public function down()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->dropColumn('trailer_url');
        });
    }
};
