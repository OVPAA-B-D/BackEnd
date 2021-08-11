<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class UserInformationModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbl_userinformation';
    protected $fillable = [
        'id',
        'email',
        'lastName',
        'firstName',
        'middleName',
        'contactNumber',
        'profilePicture',
        'roleType',
        'createdDate'

    ];
    public $timestamps = false;

    public function AccreditorEmail(){
        return $this->hasOne(AccreditorModel::class, "accreditorEmail", "accreditorEmail");
    }
}
