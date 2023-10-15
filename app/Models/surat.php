<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $fillable = ['id_user', 'id_jenis_surat', 'tanggal_surat', 'ringkasan', 'file'];
    protected $primaryKey = 'id_surat';
    public $timestamps = false;

    // One to Many
    public function jenis()
    {
        return $this->belongsTo(JenisSurat::class);
    }

    // One to Many
    public function user()
    {
        return $this->belongsTo(TblUser::class);
    }

    // Get Attribute column
    public function getJenisSuratAttribute()
    {
        return JenisSurat::find($this->attributes['id_jenis_surat'])->jenis_surat;
    }

    public function getUsernameAttribute()
    {
        return TblUser::find($this->attributes['id_user'])->username;
    }
};
