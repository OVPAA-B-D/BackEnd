<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProgramModel extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_program';
    protected $fillable = [
        'id',
        'programID',
        'campusName',
        'collegeName',
        'programName',
<<<<<<< HEAD
        'chairmanEmail',
        'taskForceMemberEmail',
=======
        'coverImage',
>>>>>>> 0e825f2 (Adding Program)
        'createdDate'

    ];

<<<<<<< HEAD
=======
    public $timestamps = false;

>>>>>>> 0e825f2 (Adding Program)
}
