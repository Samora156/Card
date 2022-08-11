<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'foto',
        'nama',
        'jenis_kelamin',
        'jabatan',
        'email',
        'tanggal_bergabung',
        'tanggal_berakhir',
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function template() {

        return $this->hasOne(Template::class);
    }
}
