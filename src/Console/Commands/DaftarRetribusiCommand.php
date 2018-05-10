<?php namespace Bantenprov\DaftarRetribusi\Console\Commands;

use Illuminate\Console\Command;

use File;
/**
 * The DaftarRetribusiCommand class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  feripratama <eroorsys@gmail.com>
 */
class DaftarRetribusiCommand extends Command
{

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }

    public function getStubFile($file){
        return File::get($file);
    }
}
