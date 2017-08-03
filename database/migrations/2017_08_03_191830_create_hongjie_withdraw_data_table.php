<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHongjieWithdrawDataTable extends Migration
{
    const TABLE_NAME = 'hongjie_withdraw_data';
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
            $table->unsignedInteger('withdraw_id')->default(0)->comment('申请表id');
            $table->decimal('note_amount', 12, 2)->default(0.00)->comment('本次开票金额');
            $table->unsignedInteger('note_time')->default(0)->comment('开票日期');
            $table->unsignedInteger('note_from_time')->default(0)->comment('开票起始日');
            $table->decimal('note_back_amount', 12, 2)->default(0.00)->comment('本次回款金额');
            $table->unsignedInteger('note_back_time')->default(0)->comment('回款日期');
            $table->unsignedInteger('note_back_from_time')->default(0)->comment('回款起始日');
            $table->decimal('reserved_tax', 12, 2)->default(0.00)->comment('本次预留税金');
            $table->decimal('reserved_guarantee', 12, 2)->default(0.00)->comment('本次预留质保金');
            $table->decimal('reserved_profit', 12, 2)->default(0.00)->comment('本次预留利润');
            $table->decimal('resetved_other_money', 12, 2)->default(0.00)->comment('本次预留其他款');
            $table->decimal('delivery_cost', 12, 2)->default(0.00)->comment('本次上交成本费用发票金额');
            $table->decimal('delivery_add_tax', 12, 2)->default(0.00)->comment('本次上交异地预缴增值税');
            $table->decimal('city_tax', 12, 2)->default(0.00)->comment('城建税');
            $table->decimal('eduication_cost', 12, 2)->default(0.00)->comment('教育费附加');
            $table->decimal('area_eduication_cost', 12, 2)->default(0.00)->comment('地方教育费附加');
            $table->decimal('business_tax', 12, 2)->default(0.00)->comment('企业所得税');
            $table->decimal('should_take_amount', 12, 2)->default(0.00)->comment('本次应取款金额');
            $table->decimal('should_take_last_amount', 12, 2)->default(0.00)->comment('本次剩余应取款金额');
            $table->decimal('apply_amount', 12, 2)->default(0.00)->comment('本次申请金额');
            $table->decimal('take_amount', 12, 2)->default(0.00)->comment('本次实际取款金额');
            $table->string('type')->default('')->comment('取款方式');
            $table->unsignedTinyInteger('is_done')->default(0)->comment('是否完成');
            $table->unsignedTinyInteger('step')->default(0)->comment('完成节点');
            $table->string('remark')->default('')->comment('备注');

            $table->timestamps();
            $table->softDeletes();

            $table->primary('id');
            $table->index('withdraw_id'); 
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
