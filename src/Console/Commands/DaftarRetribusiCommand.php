<?php namespace Bantenprov\DaftarRetribusi\Console\Commands;

use Illuminate\Console\Command;

/**
 * The DaftarRetribusiCommand class.
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  bantenporv <developer.bantenprov@gmail.com>
 */
class DaftarRetribusiCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:daftar-retribusi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\DaftarRetribusi package';

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
        $this->info('Welcome to command for Bantenprov\DaftarRetribusi package');
    }
}
