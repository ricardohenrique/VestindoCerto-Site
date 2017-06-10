<?php

namespace VestindoCerto;

use Illuminate\Database\Eloquent\Model;

class Look extends Model
{
    protected $table = 'look';
    protected $fillable = ['fk_event', 'fk_place', 'fk_user'];
}
