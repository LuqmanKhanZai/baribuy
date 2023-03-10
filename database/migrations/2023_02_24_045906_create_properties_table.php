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
        Schema::create('properties', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->bigInteger('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->string('title')->nullable();
            $table->bigInteger('bed')->nullable();
            $table->double('bath')->nullable();
            $table->double('square_feet')->nullable();
            $table->text('location')->nullable();
            $table->date('year_build')->nullable();
            $table->text('description')->nullable();
            $table->text('about')->nullable();

            // $table->string('address')->nullable();
            // $table->string('street')->nullable();
            // $table->string('zip_code')->nullable();
            // $table->unsignedBigInteger('rental_status_id')->default(1);
            // $table->double('first_dividend_yield')->nullable();
            // $table->date('first_dividend_date')->nullable();
            // $table->text('timeline_to_rent_descrition')->nullable();

            $table->bigInteger('purchase_price')->nullable();
            $table->bigInteger('repair_price')->nullable();
            $table->bigInteger('closing_cost')->nullable();
            $table->bigInteger('baribuy_fee')->nullable();
            $table->bigInteger('total_amount')->nullable();

            $table->bigInteger('per_share')->nullable();
            $table->bigInteger('total_share')->nullable();
            $table->string('hold_period')->nullable();
            
            $table->bigInteger('management_fee')->nullable();
            $table->bigInteger('monthly_tax')->nullable();
            $table->bigInteger('monthly_insurance')->nullable();
            $table->bigInteger('monthly_rent')->nullable();

            // $table->bigInteger('property_loan_amount')->nullable();
            // $table->bigInteger('equity_raised_from_investors')->nullable();
            // $table->integer('financing')->nullable();
            // $table->bigInteger('available_price')->nullable();
            // $table->double('interest_rate')->nullable();

            $table->string('thumbnail')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->string('available')->nullable();
            $table->string('status')->default('Active')->nullable();
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('properties');
    }
};
