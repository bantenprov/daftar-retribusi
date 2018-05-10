<?php namespace Bantenprov\DaftarRetribusi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The DaftarRetribusiModel class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  feripratama <eroorsys@gmail.com>
 */
class DaftarRetribusiModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'daftar_retribusi';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
