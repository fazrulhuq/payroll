<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {

            $table->id();
            $table->string('company_name');
            $table->string('gst_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('state')->nullable();
            $table->text('address')->nullable();

            $table->date('financial_year_start');
            $table->date('financial_year_end');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }

};
