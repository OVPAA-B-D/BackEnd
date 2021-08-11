<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TaskForceModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_taskforce';
    protected $fillable = [
        'id',
        'programID',
        'taskforceEmail',
        'roleDescription',
        'activeStatus',
        'createdDate',
    ];
    public $timestamps = false;

    // public function getUserInfo(){
    //     return $this->hasOne(UserInformationModel::class, 'email', 'taskforceEmail');
    // }
}
