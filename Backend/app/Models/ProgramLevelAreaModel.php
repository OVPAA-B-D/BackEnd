<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProgramLevelAreaModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_programlevelarea';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'programLevelAreaID',
        'programLevelID',
        'areaID',
        'accreditorEmail',
        'areaStatus',
        'modifiedBy',
        'modifiedDate'

    ];

    public function ProgramLevelID(){
        return $this->belongsTo(ProgramLevelModel::class, 'programLevelID', 'programLevelID');
    }
    public function ProgramLevelAreaID(){
        return $this->belongsTo(AreaModel::class, 'areaID', 'areaID');
    }
    public function ProgramLevelAccreditorEmail(){
        return $this->hasOne(AccreditorModel::class, 'programLevelAreaID', 'programLevelAreaID');
    }


}
