<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tbl_barang";
    use HasFactory;
    public $timestamps = false;

    protected $guarded = ['id'];

}
