<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDetail extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'room';

    protected $fillable = [
        'room_name',
        'room_no',
        'room_namebuilding',
        'room_class',
        'room_responsible',
        'room_condition',
        'room_other'
    ];
}
