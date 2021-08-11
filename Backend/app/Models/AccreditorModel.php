<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class AccreditorModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_accreditor';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'programLevelAreaID',
        'accreditorEmail',
        'roleDescription',
        'activeStatus',
        'createdDate',
    ];

    public function ProgramLevelAccreditorEmail(){
        return $this->belongsTo(ProgramLevelAreaModel::class, 'programLevelAreaID', 'programLevelAreaID');
    }

    public function AccreditorEmail(){
        return $this->belongsTo(UserInformationModel::class, 'email', 'accreditorEmail');
    }
}
