<?php
namespace App;
use illuminate\Database\Eloquent\Model;

class kategori extends Model{
    protected $fillable = [
        'nama','keterangan'
    ];
}