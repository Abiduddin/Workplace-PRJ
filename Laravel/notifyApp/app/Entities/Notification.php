<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = [
      'type',
      'notifiable_type',
      'notifiable_id',
      'data'
    ];
}
