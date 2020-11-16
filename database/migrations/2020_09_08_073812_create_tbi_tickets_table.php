<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbiTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbi_tickets', function (Blueprint $table) {
            $table->id();
            // UserSp_ID
            $table->string('UserSp_ID')->nullable();
            $table->string('UserRp_ID')->nullable();
            $table->dateTime('Date')->nullable();
            $table->string('TypePr')->nullable();
            $table->string('Details')->nullable();
            $table->string('SolveProb')->nullable();
            $table->string('ITM_ScID')->nullable();
            $table->string('HeDs_ScID')->nullable();
            $table->string('SectionID')->nullable();
            $table->string('UserBR')->nullable();
            $table->dateTime('CloDate')->nullable();
            $table->string('Details_So')->nullable();
            $table->string('IsActive')->nullable();
            $table->string('CaseType')->nullable();
            $table->string('Valuation')->nullable();
            $table->string('PhoneNo')->nullable();
            $table->string('IPAddress')->nullable();
       

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
        Schema::dropIfExists('tbi_tickets');
    }
}
