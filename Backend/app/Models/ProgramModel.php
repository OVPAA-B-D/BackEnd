<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProgramModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_program';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'programID',
        'campusName',
        'collegeName',
        'programName',
        'coverImage',
        'createdDate'

    ];

    public function ProgramID(){
        return $this->belongsTo(ProgramLevelModel::class, 'programID', 'programID');
    }
}
