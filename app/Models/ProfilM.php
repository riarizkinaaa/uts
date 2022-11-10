<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilM extends Model
{
    use HasFactory;
    protected $table='profil_m_s';
    protected $primaryKey='id_profil';
    protected $fillable=['id_profil','nama','wa','kebutuhan','deskripsi','foto','urgensi','kategori','progres','PIC','created_at','updated_at'];
    protected $timestemps=true;

}
