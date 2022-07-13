<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encode extends Model
{
    use HasFactory;
    protected $table = 'encode';
    protected $fillable = ['id','type','gambar'];
    protected $primaryKey = 'id';
    
    public $timestamps = false;
}
