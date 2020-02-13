<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('real_estate')) {
            Schema::create('real_estate', function (Blueprint $table) {
                $table->increments('real_estate_id')->comment('id của bất động sản');
                $table->string('real_estate_name')->index()->comment('tên bất động sản');
                $table->string('real_estate_acreage')->index()->comment('diện tích bất động sản');
                $table->string('real_estate_price')->index()->comment('giá bất động sản');
                $table->string('real_estate_description')->index()->comment('mô tả bất động sản');
                $table->string('real_estate_address')->index()->comment('địa chỉ bất động sản');

                //foreign key
                $table->integer('type_id')->index()->unsigned();
                $table->integer('status_id')->index()->unsigned();
                $table->integer('brokerage_fee_id')->index()->unsigned();
                $table->integer('ward_id')->index()->unsigned();
                $table->integer('street_id')->index()->unsigned();
                $table->integer('direction_id')->index()->unsigned();
                $table->integer('customer_id')->index()->unsigned();

                $table->foreign('type_id')->references('type_id')->on('type');
                $table->foreign('status_id')->references('status_id')->on('status');
                $table->foreign('brokerage_fee_id')->references('brokerage_fee_id')->on('brokerage_fee');
                $table->foreign('ward_id')->references('ward_id')->on('ward');
                $table->foreign('street_id')->references('street_id')->on('street');
                $table->foreign('direction_id')->references('direction_id')->on('direction');
                $table->foreign('customer_id')->references('customer_id')->on('customer');
                //log time
                $table->timestamp('created_at')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('ngày tạo');

                $table->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
                ->comment('ngày cập nhật');

                $table->timestamp('deleted_at')
                ->nullable()
                ->comment('ngày xóa tạm');
            });
            DB::statement("ALTER TABLE `real_estate` comment 'Bất động sản'");
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('real_estate');
    }
}