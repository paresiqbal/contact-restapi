<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'id';
    protected $KeyType = "int";
    protected $table = 'contacts';
    public $incrementing = true;
    public $timestamps = true;
}
