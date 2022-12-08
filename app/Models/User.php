<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    // public $fillable = [
    //     'nama',
    //     'email',
    //     'password',
    //     'role',
    //     'aktif'
    // ];

    protected $table = "user";
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'id_sekolah');
    }
}
