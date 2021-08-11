<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ProgramLevelBenchmarkModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'tbl_programlevelbenchmark';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'programLevelBenchmarkID',
        'benchmarkID',
        'programLevelID',
        'file',
        'uploadedBy',
        'uploadedDate',
        'modifiedBy',
        'modifiedDate',
        'submitStatus'
    ];

}
