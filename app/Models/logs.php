<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = ['logs'];
    protected $primaryKey = 'id_logs';
    public $timestamps = false;
}
