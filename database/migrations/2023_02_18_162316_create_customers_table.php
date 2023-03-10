<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->bigInteger('country_id')->unsigned();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            // $table->bigInteger('state_id')->unsigned();
            // $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            // $table->bigInteger('city_id')->unsigned();
            // $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string("investment_range_in_12_month")->nullable();
            $table->smallInteger("term_Service_agreed_check")->default(0);
            $table->enum('citizen_ship', ['us_citizen', 'us_resident', 'non_us_citizen_or_resident'])->nullable();
            $table->enum('account_type', ['indiviual_or_personal', 'entity_trust_or_corporation', 'retirement'])->nullable();
            $table->string('entity_type')->nullable();
            $table->string('entity_name')->nullable();
            $table->string('signatory_title')->nullable();
            $table->text('street_address')->nullable();
            $table->text('apartment_suit')->nullable();
            $table->string('postal_code')->nullable();
            $table->smallInteger('mailing_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->string('ein')->nullable();
            $table->smallInteger("net_worth_each_owner_one_million_check")->default(0);
            $table->smallInteger("net_worth_joint_spouse_check")->default(0);
            $table->smallInteger("total_asset_exceeding_check")->default(0);
            $table->smallInteger("indiviual_income_check")->default(0);
            $table->smallInteger("finary_member_check")->default(0);
            $table->smallInteger("member_of_board_of_director_check")->default(0);
            $table->smallInteger("step_in_complete")->nullable();
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
        Schema::dropIfExists('customers');
    }
};
