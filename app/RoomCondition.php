<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCondition extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'condition';
    protected $fillable = [
        'status_room'
    ];
}
