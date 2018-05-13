<?php namespace Bantenprov\DaftarRetribusi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The DaftarRetribusiModel class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  bantenporv <developer.bantenprov@gmail.com>
 */
class DaftarRetribusiModel extends Model
{
    use SoftDeletes;    

    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'daftar_retribusies';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [
        'uuid',
        'nama',
        'opd_id',
        'opd_uuid',
        'user_id',
        'user_update',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function getOpd()
    {
        return $this->belongsTo('Bantenprov\LaravelOpd\Models\LaravelOpdModel','opd_id');
    }

    public function getUserCreated()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function getUserUpdated()
    {
        return $this->belongsTo('App\User','user_update');
    }
}
