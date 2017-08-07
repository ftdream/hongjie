<?php

namespace HongeGroup\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class WithDraw extends Model
{
    use SoftDeletes;

    protected $table = 'hongjie_withdraw';

    protected $fillable = ['id', 'user_id', 'project_name', 'contract_number', 'contract_time', 'contract_amount', 'apply_time',
                            'contract_talk_amount', 'talk_amount', 'talk', 'party_a_name', 'project_manager', 'emergency_mobile',
                            'begin_time', 'end_time', 'project_take_amount', 'project_back_sum'
                          ];

    protected $hidden = ['created_at', 'deleted_at'];

}
