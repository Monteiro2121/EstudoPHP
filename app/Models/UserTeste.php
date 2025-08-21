<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserTeste extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define a tabela que esse modelo usa
    protected $table = 'userteste';

    // Campos que podem ser atribuídos em massa (mass assignment)
    protected $fillable = [
        'name',
        'email',
        'age',
        'password',
    ];

    // Campos que serão ocultados na serialização (ex.: ao transformar em JSON)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts para tipos nativos
    protected $casts = [
        'age' => 'date',
        'email_verified_at' => 'datetime',
    ];
}
