<?php namespace Bantenprov\DaftarRetribusi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The DaftarRetribusi facade.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  bantenporv <developer.bantenprov@gmail.com>
 */
class DaftarRetribusi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'daftar-retribusi';
    }
}
