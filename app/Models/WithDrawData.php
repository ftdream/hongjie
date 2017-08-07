<?php

namespace HongeGroup\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class WithDrawData extends Model
{
    use SoftDeletes;

    protected $table = 'hongjie_withdraw_data';

    protected $fillable = ['id', 'withdraw_id', 'note_amount', 'note_time', 'note_from_time', 'note_back_amount', 'note_back_time',
                            'note_back_from_time', 'reserved_tax', 'reserved_guarantee', 'reserved_profit', 'resetved_other_money',
                            'delivery_cost', 'delivery_add_tax', 'city_tax', 'eduication_cost', 'area_eduication_cost', 'business_tax',
                            'should_take_amount', 'should_take_last_amount', 'apply_amount', 'take_amount', 'type', 'step', 'remark', 'is_done'
                          ];

    protected $hidden = ['created_at', 'deleted_at'];

}
