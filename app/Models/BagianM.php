<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BagianM extends Model
{
    use HasFactory;
    protected $table='bagian_m_s';
    protected $primaryKey='id_bagian';
    protected $fillable=['id_bagian','bagian','created_at','updated_at'];
    protected $timestemps=true;
}
