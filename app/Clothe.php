<?php

namespace VestindoCerto;

use Illuminate\Database\Eloquent\Model;
// use VestindoCerto\User;

class Clothe extends Model
{
    protected $table = 'clothe';
    protected $fillable = ['image', 'description', 'fk_type', 'fk_user', 'rating'];
}
