<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskfundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riskfunds', function(Blueprint $table){
            $table->increments('id');
            $table->string('MemberId', 100);
            $table->string('MemberName', 100);
            $table->string('DomainName', 100);
            $table->string('DivisionName', 100);
            $table->string('ZoneId', 100);
            $table->string('AreaId', 100);
            $table->string('BranchId', 100);
            $table->string('TransactionType', 100);
            $table->string('MoneyMethod', 100);
            $table->date('Date');
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
        //
    }
}
