<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tblproduk';
    public $timestamps = false;
    protected $fillable = [
    'nama',
    'deskripsi',
    'harga',
    // ... list all columns you want to allow mass assignment
    ];
}
