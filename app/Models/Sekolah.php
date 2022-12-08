<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = "sekolah";
    public function user()
    {
        return $this->hasMany(User::class, 'id');
    }
}
