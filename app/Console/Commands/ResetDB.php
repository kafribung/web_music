<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kafri:bung';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset Database';

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
     * @return int
     */
    public function handle()
    {
        $bar = $this->output->createProgressBar(10);
        $bar->start();
        $this->line('Database Reset Start');
        $this->call('migrate:fresh');
        $this->line('Database Reset Finish');
        $bar->finish();
    }
}
