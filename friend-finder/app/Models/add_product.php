<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_product extends Model
{
    use HasFactory;
    protected $table="add_products";
    protected $primarykey="id";
    public $timestamps = false;
}
