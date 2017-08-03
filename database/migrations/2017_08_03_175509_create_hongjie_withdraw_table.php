<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHongjieWithdrawTable extends Migration
{
    const TABLE_NAME = 'hongjie_withdraw'; 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->unsignedInteger('id');
            $table->unsignedInteger('user_id')->default(0)->comment('用户id');
            $table->string('project_name')->default('')->comment('工程名称');
            $table->string('contract_number', 50)->default('')->comment('合同编号');
            $table->unsignedInteger('contract_time')->default(0)->comment('合同签订时间');
            $table->decimal('contract_amount', 12, 2)->default(0.00)->comment('合同金额');
            $table->unsignedInteger('apply_time')->default(0)->comment('申请时间');
            $table->decimal('contract_talk_amount', 12, 2)->default(0.00)->comment('合同及洽商金额');
            $table->decimal('talk_amount', 12, 2)->default(0.00)->comment('洽商金额');
            $table->text('talk')->comment('洽商内容');
            $table->string('party_a_name')->default('')->comment('甲方名称');
            $table->string('project_manager')->default('')->comment('项目经理及电话');
            $table->string('emergency_mobile')->default('')->comment('紧急联系人电话');
            $table->unsignedInteger('begin_time')->default(0)->comment('开工日期');
            $table->unsignedInteger('end_time')->default(0)->comment('竣工日期');
            $table->decimal('project_take_amount', 12, 2)->default(0.00)->comment('本项目应收账款');
            $table->decimal('project_back_sum', 12, 2)->default(0.00)->comment('开票回款累计');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
}
