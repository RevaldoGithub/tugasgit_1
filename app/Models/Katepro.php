<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katepro extends Model
{
    use HasFactory;
    protected $table = 'kategori_product';
    protected $guarded = [];
}
