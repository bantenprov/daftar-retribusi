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

    public $incrementing = false;

    public $primaryKey = 'id';

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
        'id',
        'title',
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
