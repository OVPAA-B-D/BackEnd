<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AccreditorModel extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_accreditor';
    protected $fillable = [
        'id',
        'programLevelAreaID',
        'accreditorEmail',
        'roleDescription',
        'activeStatus',
        'createdDate',
    ];

}