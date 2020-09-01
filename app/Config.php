<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
  protected $fillable = [
    'name',
    'email',
    'phone',
    'address',
    'close',
    'credit',
    'cash',
    'paypay',
    'category',
    'image',
    'password'
  ];
}
