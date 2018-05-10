<?php namespace Bantenprov\DaftarRetribusi\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\DaftarRetribusi\Facades\DaftarRetribusi;
use Bantenprov\DaftarRetribusi\Models\DaftarRetribusiModel;

/**
 * The DaftarRetribusiController class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  feripratama <eroorsys@gmail.com>
 */
class DaftarRetribusiController extends Controller
{
    public function demo()
    {
        return DaftarRetribusi::welcome();
    }
}
