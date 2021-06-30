<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_blog_post extends Model
{
    use HasFactory;
    protected $table="business_blog_posts";
    protected $primarykey="id";
    public $timestamps = false;
    
}
