<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProgramLevelModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_programlevel';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'programLevelID',
        'programID',
        'levelName',
        'levelStatus',

    ];

    public function ProgramLevelID(){
        return $this->hasOne(ProgramLevelAreaModel::class, 'programLevelID', 'programLevelID');
    }
    public function ProgramID(){
        return $this->belongsTo(ProgramModel::class, 'programID', 'programID');
    }

}
