<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebutuhanM extends Model
{
    use HasFactory;
    protected $table='kebutuhan_m_s';
    protected $primaryKey='id_kebutuhan';
    protected $fillable=['id_kebutuhan','id_profil',
    'id_bagian','kebutuhan','created_at','updated_at'	
];
    protected $timestemps=true;
}
